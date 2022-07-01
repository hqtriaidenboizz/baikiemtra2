<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<style>
    #media-uploader1 .dz-message {
	font-size: 25px;
	display: table-cell;
	vertical-align: middle;
	color: #a0a5aa;
}
/* ********************************************* */
#media-uploader1 {
	margin-top: 20px;
	margin-bottom: 20px;
	min-height: 150px;
	height: 200px;
	border: 2px solid rgba(0, 0, 0, 0.3);
	background: white;
	display: table;
	padding: 20px 20px;
}
#media-uploader1.dz-clickable {
	cursor: pointer;
}
#media-uploader1.dz-clickable * {
	cursor: default;
}
#media-uploader1.dz-clickable .dz-message,
#media-uploader1.dz-clickable .dz-message * {
	cursor: pointer;
}
#media-uploader1.dz-started .dz-message {
	display: none;
}
#media-uploader1.dz-drag-hover {
	border-style: solid;
}
#media-uploader1.dz-drag-hover .dz-message {
	opacity: 0.5;
}
#media-uploader1 .dz-message {
	text-align: center;
	margin: auto 0 !important;
}
#media-uploader1 .dz-preview {
	position: relative;
	display: inline-block;
	vertical-align: top;
	margin: 16px;
	min-height: 100px;
}
#media-uploader1 .dz-preview:hover {
	z-index: 1000;
}
#media-uploader1 .dz-preview:hover .dz-details {
	opacity: 1;
}
#media-uploader1 .dz-preview.dz-file-preview .dz-image {
	border-radius: 20px;
	background: #999;
	background: linear-gradient(to bottom, #eee, #ddd);
}
#media-uploader1 .dz-preview.dz-file-preview .dz-details {
	opacity: 1;
}
#media-uploader1 .dz-preview.dz-image-preview {
	background: white;
	border: 1px #333 dashed;
	-ms-filter: "progid:DXImageTransform.Microsoft.Shadow(Strength=0, Direction=124, Color=#7A7A7A)"; /*IE 8*/
	-moz-box-shadow: 4px 6px 0 rgba(122, 122, 122, 0.7); /*FF 3.5+*/
	-webkit-box-shadow: 4px 6px 0 rgba(122, 122, 122, 0.7); /*Saf3-4, Chrome, iOS 4.0.2-4.2, Android 2.3+*/
	box-shadow: 4px 6px 0 rgba(122, 122, 122, 0.7); /* FF3.5+, Opera 9+, Saf1+, Chrome, IE10 */
	filter: progid:DXImageTransform.Microsoft.Shadow(Strength=0, Direction=135, Color=#7A7A7A); /*IE 5.5-7*/
}
#media-uploader1 .dz-preview.dz-image-preview .dz-details {
	-webkit-transition: opacity 0.2s linear;
	-moz-transition: opacity 0.2s linear;
	-ms-transition: opacity 0.2s linear;
	-o-transition: opacity 0.2s linear;
	transition: opacity 0.2s linear;
}
#media-uploader1 .dz-preview .dz-remove {
	font-size: 14px;
	text-align: center;
	display: block;
	cursor: pointer;
	border: none;
}
#media-uploader1 .dz-preview .dz-remove:hover {
	text-decoration: underline;
}
#media-uploader1 .dz-preview:hover .dz-details {
	opacity: 1;
}
#media-uploader1 .dz-preview .dz-details {
	z-index: 20;
	position: absolute;
	top: 0;
	left: 0;
	opacity: 0;
	font-size: 13px;
	min-width: 100%;
	max-width: 100%;
	padding: 2em 1em;
	text-align: center;
	color: rgba(0, 0, 0, 0.9);
	line-height: 150%;
}
#media-uploader1 .dz-preview .dz-details .dz-size {
	margin-bottom: 1em;
	font-size: 16px;
}
#media-uploader1 .dz-preview .dz-details .dz-filename {
	white-space: nowrap;
}
#media-uploader1 .dz-preview .dz-details .dz-filename:hover span {
	border: 1px solid rgba(200, 200, 200, 0.8);
	background-color: rgba(255, 255, 255, 0.8);
}
#media-uploader1 .dz-preview .dz-details .dz-filename:not(:hover) {
	overflow: hidden;
	text-overflow: ellipsis;
}
#media-uploader1 .dz-preview .dz-details .dz-filename:not(:hover) span {
	border: 1px solid transparent;
}
#media-uploader1 .dz-preview .dz-details .dz-filename span,
#media-uploader1 .dz-preview .dz-details .dz-size span {
	background-color: rgba(255, 255, 255, 0.4);
	padding: 0 0.4em;
	border-radius: 3px;
}
#media-uploader1 .dz-preview:hover .dz-image img {
	-webkit-transform: scale(1.05, 1.05);
	-moz-transform: scale(1.05, 1.05);
	-ms-transform: scale(1.05, 1.05);
	-o-transform: scale(1.05, 1.05);
	transform: scale(1.05, 1.05);
	-webkit-filter: blur(8px);
	filter: blur(8px);
}
#media-uploader1 .dz-preview .dz-image {
	border-radius: 12px;
	overflow: hidden;
	width: 120px;
	height: 120px;
	position: relative;
	display: block;
	z-index: 10;
}
#media-uploader1 .dz-preview .dz-image img {
	display: block;
}
#media-uploader1 .dz-preview.dz-success .dz-success-mark {
	-webkit-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
	-moz-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
	-ms-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
	-o-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
	animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
}
#media-uploader1 .dz-preview.dz-error .dz-error-mark {
	opacity: 1;
	-webkit-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
	-moz-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
	-ms-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
	-o-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
	animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
}
#media-uploader1 .dz-preview .dz-success-mark,
#media-uploader1 .dz-preview .dz-error-mark {
	pointer-events: none;
	opacity: 0;
	z-index: 500;
	position: absolute;
	display: block;
	top: 50%;
	left: 50%;
	margin-left: -27px;
	margin-top: -27px;
}
#media-uploader1 .dz-preview .dz-success-mark svg,
#media-uploader1 .dz-preview .dz-error-mark svg {
	display: block;
	width: 54px;
	height: 54px;
}
#media-uploader1 .dz-preview.dz-processing .dz-progress {
	opacity: 1;
	-webkit-transition: all 0.2s linear;
	-moz-transition: all 0.2s linear;
	-ms-transition: all 0.2s linear;
	-o-transition: all 0.2s linear;
	transition: all 0.2s linear;
}
#media-uploader1 .dz-preview.dz-complete .dz-progress {
	opacity: 0;
	-webkit-transition: opacity 0.4s ease-in;
	-moz-transition: opacity 0.4s ease-in;
	-ms-transition: opacity 0.4s ease-in;
	-o-transition: opacity 0.4s ease-in;
	transition: opacity 0.4s ease-in;
}
#media-uploader1 .dz-preview:not(.dz-processing) .dz-progress {
	-webkit-animation: pulse 6s ease infinite;
	-moz-animation: pulse 6s ease infinite;
	-ms-animation: pulse 6s ease infinite;
	-o-animation: pulse 6s ease infinite;
	animation: pulse 6s ease infinite;
}
#media-uploader1 .dz-preview .dz-progress {
	opacity: 1;
	z-index: 1000;
	pointer-events: none;
	position: absolute;
	height: 16px;
	left: 50%;
	top: 50%;
	margin-top: -8px;
	width: 80px;
	margin-left: -40px;
	background: rgba(255, 255, 255, 0.9);
	-webkit-transform: scale(1);
	border-radius: 8px;
	overflow: hidden;
}
#media-uploader1 .dz-preview .dz-progress .dz-upload {
	background: #333;
	background: -webkit-linear-gradient(#666, #444);
	background: -o-linear-gradient(#666, #444);
	background: linear-gradient(#666, #444);
	position: absolute;
	top: 0;
	left: 0;
	bottom: 0;
	width: 0;
	-webkit-transition: width 300ms ease-in-out;
	-moz-transition: width 300ms ease-in-out;
	-ms-transition: width 300ms ease-in-out;
	-o-transition: width 300ms ease-in-out;
	transition: width 300ms ease-in-out;
}
#media-uploader1 .dz-preview.dz-error .dz-error-message {
	display: block;
}
#media-uploader1 .dz-preview.dz-error:hover .dz-error-message {
	opacity: 1;
	pointer-events: auto;
}
#media-uploader1 .dz-preview .dz-error-message {
	pointer-events: none;
	z-index: 1000;
	position: absolute;
	display: block;
	display: none;
	opacity: 0;
	-webkit-transition: opacity 0.3s ease;
	-moz-transition: opacity 0.3s ease;
	-ms-transition: opacity 0.3s ease;
	-o-transition: opacity 0.3s ease;
	transition: opacity 0.3s ease;
	border-radius: 8px;
	font-size: 13px;
	top: 130px;
	left: -10px;
	width: 140px;
	background: #be2626;
	background: linear-gradient(to bottom, #be2626, #a92222);
	padding: 0.5em 1.2em;
	color: white;
}
#media-uploader1 .dz-preview .dz-error-message:after {
	content: "";
	position: absolute;
	top: -6px;
	left: 64px;
	width: 0;
	height: 0;
	border-left: 6px solid transparent;
	border-right: 6px solid transparent;
	border-bottom: 6px solid #be2626;
}
/* ********************************************* */
#media-uploader1 .dz-preview .dz-image-preview {
	background-color: transparent;
}
/* estilos de dropzone 2  */
#media-uploader2 {
	border: 4px dashed rgb(0, 115, 170);
	background: none;
	height: 200px;
}

#media-uploader2 .dz-message {
	font-size: 25px;
	color: #a0a5aa;
}
</style>
<body>
<div class="uk-container">
	<div uk-grid>
		<div class="uk-width-1-2">
			<div class='uk-width-1-1@s'>
				<h2 class="uk-text-center">Product Details</h2>
				<hr />
				<div class="uk-width-1-1@s">
					<label class="uk-form-label" for="txtModel">Model</label>
					<div class="uk-form-controls">
						<input class="uk-input" id="txtModel" type="text" placeholder="P40 Warhawk">
					</div>
				</div>
				<div class="uk-margin">
					<label class="uk-form-label" for="txtBrand">Brand</label>
					<div class="uk-form-controls">
						<input class="uk-input" id="txtBrand" type="text" placeholder="Curtiss">
					</div>
				</div>
				<div class="uk-margin">
					<label class="uk-form-label" for="txtYear">Year</label>
					<div class="uk-form-controls">
						<input class="uk-input" id="txtYear" type="text" placeholder="1938">
					</div>
				</div>
				<div class="uk-margin">
					<label class="uk-form-label" for="txtPrice">Price</label>
					<div class="uk-form-controls">
						<input class="uk-input" id="txtPrice" type="text" placeholder="2,000,000">
					</div>
				</div>
				<div class="uk-margin">
					<label class="uk-form-label" for="txtRegistration">Registration</label>
					<div class="uk-form-controls">
						<input class="uk-input" id="txtRegistration" type="text" placeholder="1938">
					</div>
				</div>
				<div class="uk-margin">
					<label class="uk-form-label" for="txtSerialNumber">Serial Number</label>
					<div class="uk-form-controls">
						<input class="uk-input" id="txtSerialNumber" type="text" placeholder="1938">
					</div>
				</div>
				<div class="uk-margin">
					<label class="uk-form-label" for="txtLocation">Location</label>
					<div class="uk-form-controls">
						<input class="uk-input" id="txtLocation" type="text" placeholder="1938">
					</div>
				</div>
				<div class="uk-margin">
					<label class="uk-form-label" for="txtDescription">Description</label>
					<div class="uk-form-controls">
						<textarea class="uk-textarea" id="txtDescription"></textarea>
					</div>
				</div>
				<div class="uk-margin">
					<label class="uk-form-label" for="txtEquipment">Equipment</label>
					<div class="uk-form-controls">
						<textarea class="uk-textarea" id="txtEquipment"></textarea>
					</div>
				</div>
				<div class="uk-margin">
					<label class="uk-form-label" for="txtAirframe">Airframe</label>
					<div class="uk-form-controls">
						<textarea class="uk-textarea" id="txtAirframe"></textarea>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>