<?php
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<video></video>
		<script>
		var video = document.querySelector('video');
		// js obj
		var constraints = window.constraints = {
			audio: false,
			video: true
		};
		navigator.mediaDevices.getUserMedia(constraints)
		.then(function(stream) {
			var videoTracks = stream.getVideoTracks();
			console.log('Using video device: ' + videoTracks[0].label);
				stream.onended = function() {
					console.log('Stream ended');
				};
				window.stream = stream; // make variable available to browser console
				video.srcObject = stream;
		})
		</script>
	</body>
</htm>