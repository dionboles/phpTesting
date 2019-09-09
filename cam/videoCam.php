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
		<canvas id="canvas" width="320px" height="240px"></canvas>
		<script>
		const canvasElement = document.querySelector('#canvas');
		const video = document.querySelector('video');
		// js obj
		const constraints = {
			audio: false,
			video: true
		};
		const context = canvasElement.getContext('2d');
		context.drawImage(video, 0, 0, canvas.width, canvas.height);
		navigator.mediaDevices.getUserMedia(constraints).then((strem) =>{
			video.srcObject = strem;
			video.play();
		});
		
		let picture = canvasElement.toDataURL();
		console.log(picture);
		</script>
	</body>
</htm>