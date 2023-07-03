<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpMqtt\Client\Exceptions\MqttClientException;
use PhpMqtt\Client\Facades\MQTT;
use PhpParser\Node\Stmt\Echo_;

class MQTTController extends Controller
{
	public function ping()
	{
		MQTT::publish('mqtt/test', 'Hello', true, 'public');
		return redirect()->route('admin.dashboard')->with('success', 'PING SUCCESS');
	}

	public function subs()
	{
		$mqtt = MQTT::connection();
		$mqtt->subscribe('some/topic', function (string $topic, string $message) {
			echo sprintf('Received QoS level 1 message on topic [%s]: %s', $topic, $message);
		}, 1);
		$mqtt->loop(true);

		return "SUCCESS";
	}
}
