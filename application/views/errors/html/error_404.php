<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Error 404 | JobTime</title>
	<link rel="icon" type="image/x-icon" href="../assets/images/logo/favicon.ico">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../assets/css/bootstrap.css">

	<link rel="stylesheet" href="../assets/vendors/iconly/bold.css">
	<link rel="stylesheet" href="../assets/vendors/simple-datatables/style.css">

	<link rel="stylesheet" href="../assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" href="../assets/vendors/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" href="../assets/css/app.css">
	<link rel="stylesheet" href="../assets/vendors/sweetalert/dist/sweetalert2.min.css">
	<script type="text/javascript" src="../assets/vendors/sweetalert/dist/sweetalert2.all.min.js"></script>
	<style>
		@charset "UTF-8";

		@-webkit-keyframes swal2-show {
			0% {
				transform: scale(.7)
			}

			45% {
				transform: scale(1.05)
			}

			80% {
				transform: scale(.95)
			}

			100% {
				transform: scale(1)
			}
		}

		@keyframes swal2-show {
			0% {
				transform: scale(.7)
			}

			45% {
				transform: scale(1.05)
			}

			80% {
				transform: scale(.95)
			}

			100% {
				transform: scale(1)
			}
		}

		@-webkit-keyframes swal2-hide {
			0% {
				transform: scale(1);
				opacity: 1
			}

			100% {
				transform: scale(.5);
				opacity: 0
			}
		}

		@keyframes swal2-hide {
			0% {
				transform: scale(1);
				opacity: 1
			}

			100% {
				transform: scale(.5);
				opacity: 0
			}
		}

		@-webkit-keyframes swal2-animate-success-line-tip {
			0% {
				top: 1.1875em;
				left: .0625em;
				width: 0
			}

			54% {
				top: 1.0625em;
				left: .125em;
				width: 0
			}

			70% {
				top: 2.1875em;
				left: -.375em;
				width: 3.125em
			}

			84% {
				top: 3em;
				left: 1.3125em;
				width: 1.0625em
			}

			100% {
				top: 2.8125em;
				left: .875em;
				width: 1.5625em
			}
		}

		@keyframes swal2-animate-success-line-tip {
			0% {
				top: 1.1875em;
				left: .0625em;
				width: 0
			}

			54% {
				top: 1.0625em;
				left: .125em;
				width: 0
			}

			70% {
				top: 2.1875em;
				left: -.375em;
				width: 3.125em
			}

			84% {
				top: 3em;
				left: 1.3125em;
				width: 1.0625em
			}

			100% {
				top: 2.8125em;
				left: .875em;
				width: 1.5625em
			}
		}

		@-webkit-keyframes swal2-animate-success-line-long {
			0% {
				top: 3.375em;
				right: 2.875em;
				width: 0
			}

			65% {
				top: 3.375em;
				right: 2.875em;
				width: 0
			}

			84% {
				top: 2.1875em;
				right: 0;
				width: 3.4375em
			}

			100% {
				top: 2.375em;
				right: .5em;
				width: 2.9375em
			}
		}

		@keyframes swal2-animate-success-line-long {
			0% {
				top: 3.375em;
				right: 2.875em;
				width: 0
			}

			65% {
				top: 3.375em;
				right: 2.875em;
				width: 0
			}

			84% {
				top: 2.1875em;
				right: 0;
				width: 3.4375em
			}

			100% {
				top: 2.375em;
				right: .5em;
				width: 2.9375em
			}
		}

		@-webkit-keyframes swal2-rotate-success-circular-line {
			0% {
				transform: rotate(-45deg)
			}

			5% {
				transform: rotate(-45deg)
			}

			12% {
				transform: rotate(-405deg)
			}

			100% {
				transform: rotate(-405deg)
			}
		}

		@keyframes swal2-rotate-success-circular-line {
			0% {
				transform: rotate(-45deg)
			}

			5% {
				transform: rotate(-45deg)
			}

			12% {
				transform: rotate(-405deg)
			}

			100% {
				transform: rotate(-405deg)
			}
		}

		@-webkit-keyframes swal2-animate-error-x-mark {
			0% {
				margin-top: 1.625em;
				transform: scale(.4);
				opacity: 0
			}

			50% {
				margin-top: 1.625em;
				transform: scale(.4);
				opacity: 0
			}

			80% {
				margin-top: -.375em;
				transform: scale(1.15)
			}

			100% {
				margin-top: 0;
				transform: scale(1);
				opacity: 1
			}
		}

		@keyframes swal2-animate-error-x-mark {
			0% {
				margin-top: 1.625em;
				transform: scale(.4);
				opacity: 0
			}

			50% {
				margin-top: 1.625em;
				transform: scale(.4);
				opacity: 0
			}

			80% {
				margin-top: -.375em;
				transform: scale(1.15)
			}

			100% {
				margin-top: 0;
				transform: scale(1);
				opacity: 1
			}
		}

		@-webkit-keyframes swal2-animate-error-icon {
			0% {
				transform: rotateX(100deg);
				opacity: 0
			}

			100% {
				transform: rotateX(0);
				opacity: 1
			}
		}

		@keyframes swal2-animate-error-icon {
			0% {
				transform: rotateX(100deg);
				opacity: 0
			}

			100% {
				transform: rotateX(0);
				opacity: 1
			}
		}

		body.swal2-toast-shown .swal2-container {
			background-color: transparent
		}

		body.swal2-toast-shown .swal2-container.swal2-shown {
			background-color: transparent
		}

		body.swal2-toast-shown .swal2-container.swal2-top {
			top: 0;
			right: auto;
			bottom: auto;
			left: 50%;
			transform: translateX(-50%)
		}

		body.swal2-toast-shown .swal2-container.swal2-top-end,
		body.swal2-toast-shown .swal2-container.swal2-top-right {
			top: 0;
			right: 0;
			bottom: auto;
			left: auto
		}

		body.swal2-toast-shown .swal2-container.swal2-top-left,
		body.swal2-toast-shown .swal2-container.swal2-top-start {
			top: 0;
			right: auto;
			bottom: auto;
			left: 0
		}

		body.swal2-toast-shown .swal2-container.swal2-center-left,
		body.swal2-toast-shown .swal2-container.swal2-center-start {
			top: 50%;
			right: auto;
			bottom: auto;
			left: 0;
			transform: translateY(-50%)
		}

		body.swal2-toast-shown .swal2-container.swal2-center {
			top: 50%;
			right: auto;
			bottom: auto;
			left: 50%;
			transform: translate(-50%, -50%)
		}

		body.swal2-toast-shown .swal2-container.swal2-center-end,
		body.swal2-toast-shown .swal2-container.swal2-center-right {
			top: 50%;
			right: 0;
			bottom: auto;
			left: auto;
			transform: translateY(-50%)
		}

		body.swal2-toast-shown .swal2-container.swal2-bottom-left,
		body.swal2-toast-shown .swal2-container.swal2-bottom-start {
			top: auto;
			right: auto;
			bottom: 0;
			left: 0
		}

		body.swal2-toast-shown .swal2-container.swal2-bottom {
			top: auto;
			right: auto;
			bottom: 0;
			left: 50%;
			transform: translateX(-50%)
		}

		body.swal2-toast-shown .swal2-container.swal2-bottom-end,
		body.swal2-toast-shown .swal2-container.swal2-bottom-right {
			top: auto;
			right: 0;
			bottom: 0;
			left: auto
		}

		body.swal2-toast-column .swal2-toast {
			flex-direction: column;
			align-items: stretch
		}

		body.swal2-toast-column .swal2-toast .swal2-actions {
			flex: 1;
			align-self: stretch;
			height: 2.2em;
			margin-top: .3125em
		}

		body.swal2-toast-column .swal2-toast .swal2-loading {
			justify-content: center
		}

		body.swal2-toast-column .swal2-toast .swal2-input {
			height: 2em;
			margin: .3125em auto;
			font-size: 1em
		}

		body.swal2-toast-column .swal2-toast .swal2-validation-message {
			font-size: 1em
		}

		.swal2-popup.swal2-toast {
			flex-direction: row;
			align-items: center;
			width: auto;
			padding: .625em;
			overflow-y: hidden;
			box-shadow: 0 0 .625em #d9d9d9
		}

		.swal2-popup.swal2-toast .swal2-header {
			flex-direction: row
		}

		.swal2-popup.swal2-toast .swal2-title {
			flex-grow: 1;
			justify-content: flex-start;
			margin: 0 .6em;
			font-size: 1em
		}

		.swal2-popup.swal2-toast .swal2-footer {
			margin: .5em 0 0;
			padding: .5em 0 0;
			font-size: .8em
		}

		.swal2-popup.swal2-toast .swal2-close {
			position: static;
			width: .8em;
			height: .8em;
			line-height: .8
		}

		.swal2-popup.swal2-toast .swal2-content {
			justify-content: flex-start;
			font-size: 1em
		}

		.swal2-popup.swal2-toast .swal2-icon {
			width: 2em;
			min-width: 2em;
			height: 2em;
			margin: 0
		}

		.swal2-popup.swal2-toast .swal2-icon::before {
			display: flex;
			align-items: center;
			font-size: 2em;
			font-weight: 700
		}

		@media all and (-ms-high-contrast:none),
		(-ms-high-contrast:active) {
			.swal2-popup.swal2-toast .swal2-icon::before {
				font-size: .25em
			}
		}

		.swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
			width: 2em;
			height: 2em
		}

		.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
			top: .875em;
			width: 1.375em
		}

		.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
			left: .3125em
		}

		.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
			right: .3125em
		}

		.swal2-popup.swal2-toast .swal2-actions {
			flex-basis: auto !important;
			width: auto;
			height: auto;
			margin: 0 .3125em
		}

		.swal2-popup.swal2-toast .swal2-styled {
			margin: 0 .3125em;
			padding: .3125em .625em;
			font-size: 1em
		}

		.swal2-popup.swal2-toast .swal2-styled:focus {
			box-shadow: 0 0 0 .0625em #fff, 0 0 0 .125em rgba(50, 100, 150, .4)
		}

		.swal2-popup.swal2-toast .swal2-success {
			border-color: #a5dc86
		}

		.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line] {
			position: absolute;
			width: 1.6em;
			height: 3em;
			transform: rotate(45deg);
			border-radius: 50%
		}

		.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left] {
			top: -.8em;
			left: -.5em;
			transform: rotate(-45deg);
			transform-origin: 2em 2em;
			border-radius: 4em 0 0 4em
		}

		.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right] {
			top: -.25em;
			left: .9375em;
			transform-origin: 0 1.5em;
			border-radius: 0 4em 4em 0
		}

		.swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
			width: 2em;
			height: 2em
		}

		.swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
			top: 0;
			left: .4375em;
			width: .4375em;
			height: 2.6875em
		}

		.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line] {
			height: .3125em
		}

		.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip] {
			top: 1.125em;
			left: .1875em;
			width: .75em
		}

		.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long] {
			top: .9375em;
			right: .1875em;
			width: 1.375em
		}

		.swal2-popup.swal2-toast.swal2-show {
			-webkit-animation: swal2-toast-show .5s;
			animation: swal2-toast-show .5s
		}

		.swal2-popup.swal2-toast.swal2-hide {
			-webkit-animation: swal2-toast-hide .1s forwards;
			animation: swal2-toast-hide .1s forwards
		}

		.swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-tip {
			-webkit-animation: swal2-toast-animate-success-line-tip .75s;
			animation: swal2-toast-animate-success-line-tip .75s
		}

		.swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-long {
			-webkit-animation: swal2-toast-animate-success-line-long .75s;
			animation: swal2-toast-animate-success-line-long .75s
		}

		@-webkit-keyframes swal2-toast-show {
			0% {
				transform: translateY(-.625em) rotateZ(2deg)
			}

			33% {
				transform: translateY(0) rotateZ(-2deg)
			}

			66% {
				transform: translateY(.3125em) rotateZ(2deg)
			}

			100% {
				transform: translateY(0) rotateZ(0)
			}
		}

		@keyframes swal2-toast-show {
			0% {
				transform: translateY(-.625em) rotateZ(2deg)
			}

			33% {
				transform: translateY(0) rotateZ(-2deg)
			}

			66% {
				transform: translateY(.3125em) rotateZ(2deg)
			}

			100% {
				transform: translateY(0) rotateZ(0)
			}
		}

		@-webkit-keyframes swal2-toast-hide {
			100% {
				transform: rotateZ(1deg);
				opacity: 0
			}
		}

		@keyframes swal2-toast-hide {
			100% {
				transform: rotateZ(1deg);
				opacity: 0
			}
		}

		@-webkit-keyframes swal2-toast-animate-success-line-tip {
			0% {
				top: .5625em;
				left: .0625em;
				width: 0
			}

			54% {
				top: .125em;
				left: .125em;
				width: 0
			}

			70% {
				top: .625em;
				left: -.25em;
				width: 1.625em
			}

			84% {
				top: 1.0625em;
				left: .75em;
				width: .5em
			}

			100% {
				top: 1.125em;
				left: .1875em;
				width: .75em
			}
		}

		@keyframes swal2-toast-animate-success-line-tip {
			0% {
				top: .5625em;
				left: .0625em;
				width: 0
			}

			54% {
				top: .125em;
				left: .125em;
				width: 0
			}

			70% {
				top: .625em;
				left: -.25em;
				width: 1.625em
			}

			84% {
				top: 1.0625em;
				left: .75em;
				width: .5em
			}

			100% {
				top: 1.125em;
				left: .1875em;
				width: .75em
			}
		}

		@-webkit-keyframes swal2-toast-animate-success-line-long {
			0% {
				top: 1.625em;
				right: 1.375em;
				width: 0
			}

			65% {
				top: 1.25em;
				right: .9375em;
				width: 0
			}

			84% {
				top: .9375em;
				right: 0;
				width: 1.125em
			}

			100% {
				top: .9375em;
				right: .1875em;
				width: 1.375em
			}
		}

		@keyframes swal2-toast-animate-success-line-long {
			0% {
				top: 1.625em;
				right: 1.375em;
				width: 0
			}

			65% {
				top: 1.25em;
				right: .9375em;
				width: 0
			}

			84% {
				top: .9375em;
				right: 0;
				width: 1.125em
			}

			100% {
				top: .9375em;
				right: .1875em;
				width: 1.375em
			}
		}

		body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
			overflow: hidden
		}

		body.swal2-height-auto {
			height: auto !important
		}

		body.swal2-no-backdrop .swal2-shown {
			top: auto;
			right: auto;
			bottom: auto;
			left: auto;
			max-width: calc(100% - .625em * 2);
			background-color: transparent
		}

		body.swal2-no-backdrop .swal2-shown>.swal2-modal {
			box-shadow: 0 0 10px rgba(0, 0, 0, .4)
		}

		body.swal2-no-backdrop .swal2-shown.swal2-top {
			top: 0;
			left: 50%;
			transform: translateX(-50%)
		}

		body.swal2-no-backdrop .swal2-shown.swal2-top-left,
		body.swal2-no-backdrop .swal2-shown.swal2-top-start {
			top: 0;
			left: 0
		}

		body.swal2-no-backdrop .swal2-shown.swal2-top-end,
		body.swal2-no-backdrop .swal2-shown.swal2-top-right {
			top: 0;
			right: 0
		}

		body.swal2-no-backdrop .swal2-shown.swal2-center {
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%)
		}

		body.swal2-no-backdrop .swal2-shown.swal2-center-left,
		body.swal2-no-backdrop .swal2-shown.swal2-center-start {
			top: 50%;
			left: 0;
			transform: translateY(-50%)
		}

		body.swal2-no-backdrop .swal2-shown.swal2-center-end,
		body.swal2-no-backdrop .swal2-shown.swal2-center-right {
			top: 50%;
			right: 0;
			transform: translateY(-50%)
		}

		body.swal2-no-backdrop .swal2-shown.swal2-bottom {
			bottom: 0;
			left: 50%;
			transform: translateX(-50%)
		}

		body.swal2-no-backdrop .swal2-shown.swal2-bottom-left,
		body.swal2-no-backdrop .swal2-shown.swal2-bottom-start {
			bottom: 0;
			left: 0
		}

		body.swal2-no-backdrop .swal2-shown.swal2-bottom-end,
		body.swal2-no-backdrop .swal2-shown.swal2-bottom-right {
			right: 0;
			bottom: 0
		}

		.swal2-container {
			display: flex;
			position: fixed;
			z-index: 1060;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			flex-direction: row;
			align-items: center;
			justify-content: center;
			padding: .625em;
			overflow-x: hidden;
			background-color: transparent;
			-webkit-overflow-scrolling: touch
		}

		.swal2-container.swal2-top {
			align-items: flex-start
		}

		.swal2-container.swal2-top-left,
		.swal2-container.swal2-top-start {
			align-items: flex-start;
			justify-content: flex-start
		}

		.swal2-container.swal2-top-end,
		.swal2-container.swal2-top-right {
			align-items: flex-start;
			justify-content: flex-end
		}

		.swal2-container.swal2-center {
			align-items: center
		}

		.swal2-container.swal2-center-left,
		.swal2-container.swal2-center-start {
			align-items: center;
			justify-content: flex-start
		}

		.swal2-container.swal2-center-end,
		.swal2-container.swal2-center-right {
			align-items: center;
			justify-content: flex-end
		}

		.swal2-container.swal2-bottom {
			align-items: flex-end
		}

		.swal2-container.swal2-bottom-left,
		.swal2-container.swal2-bottom-start {
			align-items: flex-end;
			justify-content: flex-start
		}

		.swal2-container.swal2-bottom-end,
		.swal2-container.swal2-bottom-right {
			align-items: flex-end;
			justify-content: flex-end
		}

		.swal2-container.swal2-bottom-end>:first-child,
		.swal2-container.swal2-bottom-left>:first-child,
		.swal2-container.swal2-bottom-right>:first-child,
		.swal2-container.swal2-bottom-start>:first-child,
		.swal2-container.swal2-bottom>:first-child {
			margin-top: auto
		}

		.swal2-container.swal2-grow-fullscreen>.swal2-modal {
			display: flex !important;
			flex: 1;
			align-self: stretch;
			justify-content: center
		}

		.swal2-container.swal2-grow-row>.swal2-modal {
			display: flex !important;
			flex: 1;
			align-content: center;
			justify-content: center
		}

		.swal2-container.swal2-grow-column {
			flex: 1;
			flex-direction: column
		}

		.swal2-container.swal2-grow-column.swal2-bottom,
		.swal2-container.swal2-grow-column.swal2-center,
		.swal2-container.swal2-grow-column.swal2-top {
			align-items: center
		}

		.swal2-container.swal2-grow-column.swal2-bottom-left,
		.swal2-container.swal2-grow-column.swal2-bottom-start,
		.swal2-container.swal2-grow-column.swal2-center-left,
		.swal2-container.swal2-grow-column.swal2-center-start,
		.swal2-container.swal2-grow-column.swal2-top-left,
		.swal2-container.swal2-grow-column.swal2-top-start {
			align-items: flex-start
		}

		.swal2-container.swal2-grow-column.swal2-bottom-end,
		.swal2-container.swal2-grow-column.swal2-bottom-right,
		.swal2-container.swal2-grow-column.swal2-center-end,
		.swal2-container.swal2-grow-column.swal2-center-right,
		.swal2-container.swal2-grow-column.swal2-top-end,
		.swal2-container.swal2-grow-column.swal2-top-right {
			align-items: flex-end
		}

		.swal2-container.swal2-grow-column>.swal2-modal {
			display: flex !important;
			flex: 1;
			align-content: center;
			justify-content: center
		}

		.swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right):not(.swal2-grow-fullscreen)>.swal2-modal {
			margin: auto
		}

		@media all and (-ms-high-contrast:none),
		(-ms-high-contrast:active) {
			.swal2-container .swal2-modal {
				margin: 0 !important
			}
		}

		.swal2-container.swal2-fade {
			transition: background-color .1s
		}

		.swal2-container.swal2-shown {
			background-color: rgba(0, 0, 0, .4)
		}

		.swal2-popup {
			display: none;
			position: relative;
			box-sizing: border-box;
			flex-direction: column;
			justify-content: center;
			width: 32em;
			max-width: 100%;
			padding: 1.25em;
			border: none;
			border-radius: .3125em;
			background: #fff;
			font-family: inherit;
			font-size: 1rem
		}

		.swal2-popup:focus {
			outline: 0
		}

		.swal2-popup.swal2-loading {
			overflow-y: hidden
		}

		.swal2-header {
			display: flex;
			flex-direction: column;
			align-items: center
		}

		.swal2-title {
			position: relative;
			max-width: 100%;
			margin: 0 0 .4em;
			padding: 0;
			color: #595959;
			font-size: 1.875em;
			font-weight: 600;
			text-align: center;
			text-transform: none;
			word-wrap: break-word
		}

		.swal2-actions {
			display: flex;
			z-index: 1;
			flex-wrap: wrap;
			align-items: center;
			justify-content: center;
			width: 100%;
			margin: 1.25em auto 0
		}

		.swal2-actions:not(.swal2-loading) .swal2-styled[disabled] {
			opacity: .4
		}

		.swal2-actions:not(.swal2-loading) .swal2-styled:hover {
			background-image: linear-gradient(rgba(0, 0, 0, .1), rgba(0, 0, 0, .1))
		}

		.swal2-actions:not(.swal2-loading) .swal2-styled:active {
			background-image: linear-gradient(rgba(0, 0, 0, .2), rgba(0, 0, 0, .2))
		}

		.swal2-actions.swal2-loading .swal2-styled.swal2-confirm {
			box-sizing: border-box;
			width: 2.5em;
			height: 2.5em;
			margin: .46875em;
			padding: 0;
			-webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
			animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
			border: .25em solid transparent;
			border-radius: 100%;
			border-color: transparent;
			background-color: transparent !important;
			color: transparent;
			cursor: default;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none
		}

		.swal2-actions.swal2-loading .swal2-styled.swal2-cancel {
			margin-right: 30px;
			margin-left: 30px
		}

		.swal2-actions.swal2-loading :not(.swal2-styled).swal2-confirm::after {
			content: "";
			display: inline-block;
			width: 15px;
			height: 15px;
			margin-left: 5px;
			-webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
			animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
			border: 3px solid #999;
			border-radius: 50%;
			border-right-color: transparent;
			box-shadow: 1px 1px 1px #fff
		}

		.swal2-styled {
			margin: .3125em;
			padding: .625em 2em;
			box-shadow: none;
			font-weight: 500
		}

		.swal2-styled:not([disabled]) {
			cursor: pointer
		}

		.swal2-styled.swal2-confirm {
			border: 0;
			border-radius: .25em;
			background: initial;
			background-color: #3085d6;
			color: #fff;
			font-size: 1.0625em
		}

		.swal2-styled.swal2-cancel {
			border: 0;
			border-radius: .25em;
			background: initial;
			background-color: #aaa;
			color: #fff;
			font-size: 1.0625em
		}

		.swal2-styled:focus {
			outline: 0;
			box-shadow: 0 0 0 2px #fff, 0 0 0 4px rgba(50, 100, 150, .4)
		}

		.swal2-styled::-moz-focus-inner {
			border: 0
		}

		.swal2-footer {
			justify-content: center;
			margin: 1.25em 0 0;
			padding: 1em 0 0;
			border-top: 1px solid #eee;
			color: #545454;
			font-size: 1em
		}

		.swal2-image {
			max-width: 100%;
			margin: 1.25em auto
		}

		.swal2-close {
			position: absolute;
			z-index: 2;
			top: 0;
			right: 0;
			justify-content: center;
			width: 1.2em;
			height: 1.2em;
			padding: 0;
			overflow: hidden;
			transition: color .1s ease-out;
			border: none;
			border-radius: 0;
			outline: initial;
			background: 0 0;
			color: #ccc;
			font-family: serif;
			font-size: 2.5em;
			line-height: 1.2;
			cursor: pointer
		}

		.swal2-close:hover {
			transform: none;
			background: 0 0;
			color: #f27474
		}

		.swal2-content {
			z-index: 1;
			justify-content: center;
			margin: 0;
			padding: 0;
			color: #545454;
			font-size: 1.125em;
			font-weight: 400;
			line-height: normal;
			text-align: center;
			word-wrap: break-word
		}

		.swal2-checkbox,
		.swal2-file,
		.swal2-input,
		.swal2-radio,
		.swal2-select,
		.swal2-textarea {
			margin: 1em auto
		}

		.swal2-file,
		.swal2-input,
		.swal2-textarea {
			box-sizing: border-box;
			width: 100%;
			transition: border-color .3s, box-shadow .3s;
			border: 1px solid #d9d9d9;
			border-radius: .1875em;
			background: inherit;
			box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06);
			color: inherit;
			font-size: 1.125em
		}

		.swal2-file.swal2-inputerror,
		.swal2-input.swal2-inputerror,
		.swal2-textarea.swal2-inputerror {
			border-color: #f27474 !important;
			box-shadow: 0 0 2px #f27474 !important
		}

		.swal2-file:focus,
		.swal2-input:focus,
		.swal2-textarea:focus {
			border: 1px solid #b4dbed;
			outline: 0;
			box-shadow: 0 0 3px #c4e6f5
		}

		.swal2-file::-webkit-input-placeholder,
		.swal2-input::-webkit-input-placeholder,
		.swal2-textarea::-webkit-input-placeholder {
			color: #ccc
		}

		.swal2-file::-moz-placeholder,
		.swal2-input::-moz-placeholder,
		.swal2-textarea::-moz-placeholder {
			color: #ccc
		}

		.swal2-file:-ms-input-placeholder,
		.swal2-input:-ms-input-placeholder,
		.swal2-textarea:-ms-input-placeholder {
			color: #ccc
		}

		.swal2-file::-ms-input-placeholder,
		.swal2-input::-ms-input-placeholder,
		.swal2-textarea::-ms-input-placeholder {
			color: #ccc
		}

		.swal2-file::placeholder,
		.swal2-input::placeholder,
		.swal2-textarea::placeholder {
			color: #ccc
		}

		.swal2-range {
			margin: 1em auto;
			background: inherit
		}

		.swal2-range input {
			width: 80%
		}

		.swal2-range output {
			width: 20%;
			color: inherit;
			font-weight: 600;
			text-align: center
		}

		.swal2-range input,
		.swal2-range output {
			height: 2.625em;
			padding: 0;
			font-size: 1.125em;
			line-height: 2.625em
		}

		.swal2-input {
			height: 2.625em;
			padding: 0 .75em
		}

		.swal2-input[type=number] {
			max-width: 10em
		}

		.swal2-file {
			background: inherit;
			font-size: 1.125em
		}

		.swal2-textarea {
			height: 6.75em;
			padding: .75em
		}

		.swal2-select {
			min-width: 50%;
			max-width: 100%;
			padding: .375em .625em;
			background: inherit;
			color: inherit;
			font-size: 1.125em
		}

		.swal2-checkbox,
		.swal2-radio {
			align-items: center;
			justify-content: center;
			background: inherit;
			color: inherit
		}

		.swal2-checkbox label,
		.swal2-radio label {
			margin: 0 .6em;
			font-size: 1.125em
		}

		.swal2-checkbox input,
		.swal2-radio input {
			margin: 0 .4em
		}

		.swal2-validation-message {
			display: none;
			align-items: center;
			justify-content: center;
			padding: .625em;
			overflow: hidden;
			background: #f0f0f0;
			color: #666;
			font-size: 1em;
			font-weight: 300
		}

		.swal2-validation-message::before {
			content: "!";
			display: inline-block;
			width: 1.5em;
			min-width: 1.5em;
			height: 1.5em;
			margin: 0 .625em;
			zoom: normal;
			border-radius: 50%;
			background-color: #f27474;
			color: #fff;
			font-weight: 600;
			line-height: 1.5em;
			text-align: center
		}

		@supports (-ms-accelerator:true) {
			.swal2-range input {
				width: 100% !important
			}

			.swal2-range output {
				display: none
			}
		}

		@media all and (-ms-high-contrast:none),
		(-ms-high-contrast:active) {
			.swal2-range input {
				width: 100% !important
			}

			.swal2-range output {
				display: none
			}
		}

		@-moz-document url-prefix() {
			.swal2-close:focus {
				outline: 2px solid rgba(50, 100, 150, .4)
			}
		}

		.swal2-icon {
			position: relative;
			box-sizing: content-box;
			justify-content: center;
			width: 5em;
			height: 5em;
			margin: 1.25em auto 1.875em;
			zoom: normal;
			border: .25em solid transparent;
			border-radius: 50%;
			font-family: inherit;
			line-height: 5em;
			cursor: default;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none
		}

		.swal2-icon::before {
			display: flex;
			align-items: center;
			height: 92%;
			font-size: 3.75em
		}

		.swal2-icon.swal2-error {
			border-color: #f27474
		}

		.swal2-icon.swal2-error .swal2-x-mark {
			position: relative;
			flex-grow: 1
		}

		.swal2-icon.swal2-error [class^=swal2-x-mark-line] {
			display: block;
			position: absolute;
			top: 2.3125em;
			width: 2.9375em;
			height: .3125em;
			border-radius: .125em;
			background-color: #f27474
		}

		.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
			left: 1.0625em;
			transform: rotate(45deg)
		}

		.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
			right: 1em;
			transform: rotate(-45deg)
		}

		.swal2-icon.swal2-warning {
			border-color: #facea8;
			color: #f8bb86
		}

		.swal2-icon.swal2-warning::before {
			content: "!"
		}

		.swal2-icon.swal2-info {
			border-color: #9de0f6;
			color: #3fc3ee
		}

		.swal2-icon.swal2-info::before {
			content: "i"
		}

		.swal2-icon.swal2-question {
			border-color: #c9dae1;
			color: #87adbd
		}

		.swal2-icon.swal2-question::before {
			content: "?"
		}

		.swal2-icon.swal2-question.swal2-arabic-question-mark::before {
			content: "؟"
		}

		.swal2-icon.swal2-success {
			border-color: #a5dc86
		}

		.swal2-icon.swal2-success [class^=swal2-success-circular-line] {
			position: absolute;
			width: 3.75em;
			height: 7.5em;
			transform: rotate(45deg);
			border-radius: 50%
		}

		.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=left] {
			top: -.4375em;
			left: -2.0635em;
			transform: rotate(-45deg);
			transform-origin: 3.75em 3.75em;
			border-radius: 7.5em 0 0 7.5em
		}

		.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=right] {
			top: -.6875em;
			left: 1.875em;
			transform: rotate(-45deg);
			transform-origin: 0 3.75em;
			border-radius: 0 7.5em 7.5em 0
		}

		.swal2-icon.swal2-success .swal2-success-ring {
			position: absolute;
			z-index: 2;
			top: -.25em;
			left: -.25em;
			box-sizing: content-box;
			width: 100%;
			height: 100%;
			border: .25em solid rgba(165, 220, 134, .3);
			border-radius: 50%
		}

		.swal2-icon.swal2-success .swal2-success-fix {
			position: absolute;
			z-index: 1;
			top: .5em;
			left: 1.625em;
			width: .4375em;
			height: 5.625em;
			transform: rotate(-45deg)
		}

		.swal2-icon.swal2-success [class^=swal2-success-line] {
			display: block;
			position: absolute;
			z-index: 2;
			height: .3125em;
			border-radius: .125em;
			background-color: #a5dc86
		}

		.swal2-icon.swal2-success [class^=swal2-success-line][class$=tip] {
			top: 2.875em;
			left: .875em;
			width: 1.5625em;
			transform: rotate(45deg)
		}

		.swal2-icon.swal2-success [class^=swal2-success-line][class$=long] {
			top: 2.375em;
			right: .5em;
			width: 2.9375em;
			transform: rotate(-45deg)
		}

		.swal2-progress-steps {
			align-items: center;
			margin: 0 0 1.25em;
			padding: 0;
			background: inherit;
			font-weight: 600
		}

		.swal2-progress-steps li {
			display: inline-block;
			position: relative
		}

		.swal2-progress-steps .swal2-progress-step {
			z-index: 20;
			width: 2em;
			height: 2em;
			border-radius: 2em;
			background: #3085d6;
			color: #fff;
			line-height: 2em;
			text-align: center
		}

		.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step {
			background: #3085d6
		}

		.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step {
			background: #add8e6;
			color: #fff
		}

		.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step-line {
			background: #add8e6
		}

		.swal2-progress-steps .swal2-progress-step-line {
			z-index: 10;
			width: 2.5em;
			height: .4em;
			margin: 0 -1px;
			background: #3085d6
		}

		[class^=swal2] {
			-webkit-tap-highlight-color: transparent
		}

		.swal2-show {
			-webkit-animation: swal2-show .3s;
			animation: swal2-show .3s
		}

		.swal2-show.swal2-noanimation {
			-webkit-animation: none;
			animation: none
		}

		.swal2-hide {
			-webkit-animation: swal2-hide .15s forwards;
			animation: swal2-hide .15s forwards
		}

		.swal2-hide.swal2-noanimation {
			-webkit-animation: none;
			animation: none
		}

		.swal2-rtl .swal2-close {
			right: auto;
			left: 0
		}

		.swal2-animate-success-icon .swal2-success-line-tip {
			-webkit-animation: swal2-animate-success-line-tip .75s;
			animation: swal2-animate-success-line-tip .75s
		}

		.swal2-animate-success-icon .swal2-success-line-long {
			-webkit-animation: swal2-animate-success-line-long .75s;
			animation: swal2-animate-success-line-long .75s
		}

		.swal2-animate-success-icon .swal2-success-circular-line-right {
			-webkit-animation: swal2-rotate-success-circular-line 4.25s ease-in;
			animation: swal2-rotate-success-circular-line 4.25s ease-in
		}

		.swal2-animate-error-icon {
			-webkit-animation: swal2-animate-error-icon .5s;
			animation: swal2-animate-error-icon .5s
		}

		.swal2-animate-error-icon .swal2-x-mark {
			-webkit-animation: swal2-animate-error-x-mark .5s;
			animation: swal2-animate-error-x-mark .5s
		}

		@-webkit-keyframes swal2-rotate-loading {
			0% {
				transform: rotate(0)
			}

			100% {
				transform: rotate(360deg)
			}
		}

		@keyframes swal2-rotate-loading {
			0% {
				transform: rotate(0)
			}

			100% {
				transform: rotate(360deg)
			}
		}

		@media print {
			body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
				overflow-y: scroll !important
			}

			body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true] {
				display: none
			}

			body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container {
				position: static !important
			}
		}
	</style>
</head>



<body style="padding-top: 20px;">

	
	<div class="row" style="margin-right: 20px; margin-left: 20px; padding-bottom: 20px;">
	</div>

	

	<div class="text-center my-auto" style="margin: 20px;">
		<img class="card-img-top img-fluid" src="../assets/images/samples/error-404.png" alt="Card " style=" width: 300px; img-dragable: false;">
		<h3>Halaman yang anda kunjungi <br> masih belum tersedia</h3>
	</div>





</body>

</html>