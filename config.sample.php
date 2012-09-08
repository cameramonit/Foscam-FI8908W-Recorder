<?php

return array(
	'cam_ip' => '172.20.0.15',
	'cam_port' => 80,
	'day_threshold' => 0.97,
	'night_threshold' => 0.94,
	'record_min_length' => 30, // Record for at least this long, even if no further movement
	'resume_recording_within' => 30, // If more movement is detected, resume the previous recording (value is seconds)
	'timeline_size' => 6, // Max number of frames stored at any one time. Will be appended to video pre-movement
	'cabinet_adapter' => '\DotsUnited\Cabinet\Adapter\AmazonS3Adapter', // AmazonS3Adapter or StreamAdapter
	'cabinet_settings' => 'aws', // Any subkey of this array. Should be an array

	// AWS Settings
	'aws' => array(
		'aws_key' => '',
		'aws_secret_key' => '',
		'bucket' => '',
		'storage_class' => 'STANDARD', // STANDARD or REDUCED_REDUNDANCY
		'acl' => 'private', // private, public-read, public-read-write, authenticated-read, bucket-owner-read or bucket-owner-full-control
	),

	// Stream Settings
	'stream' => array(
		'base_path' => __DIR__.'/out/',
		'base_uri' => '',
	),
);
