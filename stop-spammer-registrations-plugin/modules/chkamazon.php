<?php
// Allow List - returns false if not found

if ( !defined( 'ABSPATH' ) ) {
	http_response_code( 404 );
	die();
}

// last updated from https://docs.aws.amazon.com/vpc/latest/userguide/aws-ip-ranges.html on 12/22/20
class chkamazon extends be_module {
	public $searchname = 'Amazon AWS Server';
	public $searchlist = array(
		'Amazon AWS Server', // testing out checks for AWS
		array( '103.4.8.0', '103.4.15.255' ),
		array( '107.20.0.0', '107.23.255.255' ),
		array( '122.248.192.0', '122.248.255.255' ),
		array( '174.129.0.0', '174.129.255.255' ),
		array( '175.41.128.0', '175.41.191.255' ),
		array( '175.41.192.0', '175.41.255.255' ),
		array( '176.32.64.0', '176.32.95.255' ),
		array( '176.34.0.0', '176.34.63.255' ),
		array( '176.34.128.0', '176.34.255.255' ),
		array( '176.34.64.0', '176.34.127.255' ),
		array( '177.71.128.0', '177.71.255.255' ),
		array( '184.169.128.0', '184.169.255.255' ),
		array( '184.72.0.0', '184.72.63.255' ),
		array( '184.72.128.0', '184.72.255.255' ),
		array( '184.72.64.0', '184.72.127.255' ),
		array( '184.73.0.0', '184.73.255.255' ),
		array( '204.236.128.0', '204.236.191.255' ),
		array( '204.236.192.0', '204.236.255.255' ),
		array( '23.20.0.0', '23.23.255.255' ),
		array( '46.137.0.0', '46.137.127.255' ),
		array( '46.137.128.0', '46.137.191.255' ),
		array( '46.137.192.0', '46.137.255.255' ),
		array( '46.51.128.0', '46.51.191.255' ),
		array( '46.51.192.0', '46.51.207.255' ),
		array( '46.51.216.0', '46.51.223.255' ),
		array( '46.51.224.0', '46.51.255.255' ),
		array( '50.112.0.0', '50.112.255.255' ),
		array( '50.16.0.0', '50.17.255.255' ),
		array( '50.18.0.0', '50.18.255.255' ),
		array( '50.19.0.0', '50.19.255.255' ),
		array( '54.176.0.0', '54.177.255.255' ),
		array( '54.178.0.0', '54.178.255.255' ),
		array( '54.179.0.0', '54.179.255.255' ),
		array( '54.183.0.0', '54.183.255.255' ),
		array( '54.184.0.0', '54.191.255.255' ),
		array( '54.193.0.0', '54.193.255.255' ),
		array( '54.194.0.0', '54.195.255.255' ),
		array( '54.196.0.0', '54.197.255.255' ),
		array( '54.198.0.0', '54.198.255.255' ),
		array( '54.199.0.0', '54.199.255.255' ),
		array( '54.200.0.0', '54.201.255.255' ),
		array( '54.202.0.0', '54.203.255.255' ),
		array( '54.204.0.0', '54.205.255.255' ),
		array( '54.206.0.0', '54.206.255.255' ),
		array( '54.207.0.0', '54.207.255.255' ),
		array( '54.208.0.0', '54.209.255.255' ),
		array( '54.210.0.0', '54.211.255.255' ),
		array( '54.212.0.0', '54.213.255.255' ),
		array( '54.214.0.0', '54.214.255.255' ),
		array( '54.215.0.0', '54.215.255.255' ),
		array( '54.216.0.0', '54.217.255.255' ),
		array( '54.218.0.0', '54.218.255.255' ),
		array( '54.219.0.0', '54.219.255.255' ),
		array( '54.220.0.0', '54.220.255.255' ),
		array( '54.221.0.0', '54.221.255.255' ),
		array( '54.224.0.0', '54.225.255.255' ),
		array( '54.226.0.0', '54.227.255.255' ),
		array( '54.228.0.0', '54.228.255.255' ),
		array( '54.229.0.0', '54.229.255.255' ),
		array( '54.232.0.0', '54.232.255.255' ),
		array( '54.233.0.0', '54.233.63.255' ),
		array( '54.234.0.0', '54.235.255.255' ),
		array( '54.236.0.0', '54.237.255.255' ),
		array( '54.238.0.0', '54.238.255.255' ),
		array( '54.241.0.0', '54.241.255.255' ),
		array( '54.242.0.0', '54.243.255.255' ),
		array( '54.244.0.0', '54.244.255.255' ),
		array( '54.245.0.0', '54.245.255.255' ),
		array( '54.246.0.0', '54.246.255.255' ),
		array( '54.247.0.0', '54.247.255.255' ),
		array( '54.248.0.0', '54.249.255.255' ),
		array( '54.250.0.0', '54.250.255.255' ),
		array( '54.251.0.0', '54.251.255.255' ),
		array( '54.252.0.0', '54.252.255.255' ),
		array( '54.253.0.0', '54.253.255.255' ),
		array( '54.254.0.0', '54.254.255.255' ),
		array( '54.255.0.0', '54.255.255.255' ),
		array( '54.72.0.0', '54.75.255.255' ),
		array( '54.76.0.0', '54.77.255.255' ),
		array( '54.78.0.0', '54.78.255.255' ),
		array( '54.79.0.0', '54.79.255.255' ),
		array( '54.80.0.0', '54.87.255.255' ),
		array( '54.95.0.0', '54.95.255.255' ),
		array( '67.202.0.0', '67.202.63.255' ),
		array( '72.44.32.0', '72.44.63.255' ),
		array( '75.101.128.0', '75.101.255.255' ),
		array( '79.125.0.0', '79.125.127.255' ),
		array( '96.127.0.0', '96.127.63.255' )
	);
}

?>