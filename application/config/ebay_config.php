<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| eBay credentials
|--------------------------------------------------------------------------
*/
$config['ebay_credentials']['sandbox'] = true;
$config['ebay_credentials']['compat_level'] = 753;
$config['ebay_credentials']['api_endpoint'] = $config['ebay_credentials']['sandbox'] ? 'https://api.sandbox.ebay.com/ws/api.dll' : 'https://api.ebay.com/ws/api.dll';
$config['ebay_credentials']['dev_id'] = $config['ebay_credentials']['sandbox'] ? "a09bf47a-bea7-49b0-b5e2-ae4e76242b3d" : "";
$config['ebay_credentials']['app_id'] = $config['ebay_credentials']['sandbox'] ? "HristoTo-testsand-SBX-a132041a0-8d66097f" : "";
$config['ebay_credentials']['cert_id'] = $config['ebay_credentials']['sandbox'] ? "SBX-132041a073d0-27e5-43e5-bae7-37ef" : "";
$config['ebay_credentials']['auth_token'] = $config['ebay_credentials']['sandbox'] ? 
"AgAAAA**AQAAAA**aAAAAA**S9hwWg**nY+sHZ2PrBmdj6wVnY+sEZ2PrA2dj6wFk4GpCpaApQydj6x9nY+seQ**lXcEAA**AAMAAA**Za2mDPvP8wNSluN0QbnIg5o"
. "2T2X7GRCwtDo0xe12kP3zZu9GrFrOmw/924QrGAM+gmLXWJ02B9re2/85AABJofXD8pLAqGHbdfrEPTWwrfu9IeWN+r4RSsNJ5AbRZW5aRLCpoHz5C239xOSojLz+66"
. "9uch5zeOp8+m1fZSF69cGusHOTzzM/Z+x5UyN4JGNQJT3FJlQRYRJB3tDIRaq0OEKrGxH9SkghzL5cqM2BPkK14eGEyCEZSbn4vLMHwgXI2T03YqOPH1X2qYguxfLb/"
. "D3jRWL5IIdzzCN8PUwr9XmTGEZ4lWGVtmSWbGQVm74aBAce0DTYD/J9ghB+2Eq3nUwtK/2t0R/xUFgoR0QA/MmcX0hVhrk7YRctm1wE3an+c2TazH9gqq+SR/5iE+rl"
. "PqJFEb9oPjENUv59HcG38ezuz2sIyxroESld9/+TXh3AjJ/5q+Zjs4HxtSRly2GhcVMfVXWTzOqxC5Be2ALmkKMoPq3sY/mXhhURrVNtioIWu8sH4tJ4G2v69rk06Hy"
. "LjvL8qkx6mcTikly1TSOgfuzWQPQEoafsVfMB29AUYgfcHlogA+MAp7NeQHL5m7KUmCHfIRQD4a7i9OQIch6oRVqmoZq1Znjivw1cGKT2sk46aVRCaKEsQ4IzDUqtLa"
. "D7WbkyRvOVtoZn/1er+IhfzN6Q8sY4ITrbCpdn4MeoBHEvacrIeKsQvX6WqDslr2pu7PKI8naBKc7VcO7VIYAwgh+3FJAnf9Koz0ClTgIaFZWD" : "";