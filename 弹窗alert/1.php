<script src="http://avporn.eu/app/18/asset/js/jquery.min.js"></script>

 <style>body.stop-scrolling {
  height: 100%;
  overflow: hidden; }

.sweet-overlay {
  background-color: black;
  /* IE8 */
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=40)";
  /* IE8 */
  background-color: rgba(0, 0, 0, 0.4);
  position: fixed;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  display: none;
  z-index: 10006; }
  .sweet-overlay1 {
    background-color: black;
    /* IE8 */
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=40)";
    /* IE8 */
    background-color: rgba(0, 0, 0, 0.4);
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    display: none;
    z-index: 10000; }

.sweet-alert {
  background-color: white;
  font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
  width: 478px;
  padding: 17px;
  border-radius: 5px;
  text-align: center;
  position: fixed;
  left: 50%;
  top: 50%;
  margin-left: -256px;
  margin-top: -200px;
  overflow: hidden;
  display: none;
  z-index: 99999; }
  @media all and (max-width: 540px) {
    .sweet-alert {
      width: auto;
      margin-left: 0;
      margin-right: 0;
      left: 15px;
      right: 15px; } }
  .sweet-alert h2 {
    color: #575757;
    font-size: 30px;
    text-align: center;
    font-weight: 600;
    text-transform: none;
    position: relative;
    margin: 25px 0;
    padding: 0;
    line-height: 40px;
    display: block; }
  .sweet-alert p {
    color: #797979;
    font-size: 16px;
    text-align: center;
    font-weight: 300;
    position: relative;
    text-align: inherit;
    float: none;
    margin: 0;
    padding: 0;
    line-height: normal; }
  .sweet-alert fieldset {
    border: none;
    position: relative; }
  .sweet-alert .sa-error-container {
    background-color: #f1f1f1;
    margin-left: -17px;
    margin-right: -17px;
    overflow: hidden;
    padding: 0 10px;
    max-height: 0;
    webkit-transition: padding 0.15s, max-height 0.15s;
    transition: padding 0.15s, max-height 0.15s; }
    .sweet-alert .sa-error-container.show {
      padding: 10px 0;
      max-height: 100px;
      webkit-transition: padding 0.2s, max-height 0.2s;
      transition: padding 0.25s, max-height 0.25s; }
    .sweet-alert .sa-error-container .icon {
      display: inline-block;
      width: 24px;
      height: 24px;
      border-radius: 50%;
      background-color: #ea7d7d;
      color: white;
      line-height: 24px;
      text-align: center;
      margin-right: 3px; }
    .sweet-alert .sa-error-container p {
      display: inline-block; }
  .sweet-alert .sa-input-error {
    position: absolute;
    top: 29px;
    right: 26px;
    width: 20px;
    height: 20px;
    opacity: 0;
    -webkit-transform: scale(0.5);
    transform: scale(0.5);
    -webkit-transform-origin: 50% 50%;
    transform-origin: 50% 50%;
    -webkit-transition: all 0.1s;
    transition: all 0.1s; }
    .sweet-alert .sa-input-error::before, .sweet-alert .sa-input-error::after {
      content: "";
      width: 20px;
      height: 6px;
      background-color: #f06e57;
      border-radius: 3px;
      position: absolute;
      top: 50%;
      margin-top: -4px;
      left: 50%;
      margin-left: -9px; }
    .sweet-alert .sa-input-error::before {
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg); }
    .sweet-alert .sa-input-error::after {
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg); }
    .sweet-alert .sa-input-error.show {
      opacity: 1;
      -webkit-transform: scale(1);
      transform: scale(1); }
  .sweet-alert input {
    width: 100%;
    box-sizing: border-box;
    border-radius: 3px;
    border: 1px solid #d7d7d7;
    height: 43px;
    margin-top: 10px;
    margin-bottom: 17px;
    font-size: 18px;
    box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.06);
    padding: 0 12px;
    display: none;
    -webkit-transition: all 0.3s;
    transition: all 0.3s; }
    .sweet-alert input:focus {
      outline: none;
      box-shadow: 0px 0px 3px #c4e6f5;
      border: 1px solid #b4dbed; }
      .sweet-alert input:focus::-moz-placeholder {
        transition: opacity 0.3s 0.03s ease;
        opacity: 0.5; }
      .sweet-alert input:focus:-ms-input-placeholder {
        transition: opacity 0.3s 0.03s ease;
        opacity: 0.5; }
      .sweet-alert input:focus::-webkit-input-placeholder {
        transition: opacity 0.3s 0.03s ease;
        opacity: 0.5; }
    .sweet-alert input::-moz-placeholder {
      color: #bdbdbd; }
    .sweet-alert input:-ms-input-placeholder {
      color: #bdbdbd; }
    .sweet-alert input::-webkit-input-placeholder {
      color: #bdbdbd; }
  .sweet-alert.show-input input {
    display: block; }
  .sweet-alert .sa-confirm-button-container {
    display: inline-block;
    position: relative; }
  .sweet-alert .la-ball-fall {
    position: absolute;
    left: 50%;
    top: 50%;
    margin-left: -27px;
    margin-top: 4px;
    opacity: 0;
    visibility: hidden; }
  .sweet-alert button {
    background-color: #8CD4F5;
    color: white;
    border: none;
    box-shadow: none;
    font-size: 17px;
    font-weight: 500;
    -webkit-border-radius: 4px;
    border-radius: 5px;
    padding: 10px 32px;
    margin: 26px 5px 0 5px;
    cursor: pointer; }
    .sweet-alert button:focus {
      outline: none;
      box-shadow: 0 0 2px rgba(128, 179, 235, 0.5), inset 0 0 0 1px rgba(0, 0, 0, 0.05); }
    .sweet-alert button:hover {
      background-color: #7ecff4; }
    .sweet-alert button:active {
      background-color: #5dc2f1; }
    .sweet-alert button.cancel {
      background-color: #C1C1C1; }
      .sweet-alert button.cancel:hover {
        background-color: #b9b9b9; }
      .sweet-alert button.cancel:active {
        background-color: #a8a8a8; }
      .sweet-alert button.cancel:focus {
        box-shadow: rgba(197, 205, 211, 0.8) 0px 0px 2px, rgba(0, 0, 0, 0.0470588) 0px 0px 0px 1px inset !important; }
    .sweet-alert button[disabled] {
      opacity: .6;
      cursor: default; }
    .sweet-alert button.confirm[disabled] {
      color: transparent; }
      .sweet-alert button.confirm[disabled] ~ .la-ball-fall {
        opacity: 1;
        visibility: visible;
        transition-delay: 0s; }
    .sweet-alert button::-moz-focus-inner {
      border: 0; }
  .sweet-alert[data-has-cancel-button=false] button {
    box-shadow: none !important; }
  .sweet-alert[data-has-confirm-button=false][data-has-cancel-button=false] {
    padding-bottom: 40px; }
  .sweet-alert .sa-icon {
    width: 80px;
    height: 80px;
    border: 4px solid gray;
    -webkit-border-radius: 40px;
    border-radius: 40px;
    border-radius: 50%;
    margin: 20px auto;
    padding: 0;
    position: relative;
    box-sizing: content-box; }
    .sweet-alert .sa-icon.sa-error {
      border-color: #F27474; }
      .sweet-alert .sa-icon.sa-error .sa-x-mark {
        position: relative;
        display: block; }
      .sweet-alert .sa-icon.sa-error .sa-line {
        position: absolute;
        height: 5px;
        width: 47px;
        background-color: #F27474;
        display: block;
        top: 37px;
        border-radius: 2px; }
        .sweet-alert .sa-icon.sa-error .sa-line.sa-left {
          -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
          left: 17px; }
        .sweet-alert .sa-icon.sa-error .sa-line.sa-right {
          -webkit-transform: rotate(-45deg);
          transform: rotate(-45deg);
          right: 16px; }
    .sweet-alert .sa-icon.sa-warning {
      border-color: #F8BB86; }
      .sweet-alert .sa-icon.sa-warning .sa-body {
        position: absolute;
        width: 5px;
        height: 47px;
        left: 50%;
        top: 10px;
        -webkit-border-radius: 2px;
        border-radius: 2px;
        margin-left: -2px;
        background-color: #F8BB86; }
      .sweet-alert .sa-icon.sa-warning .sa-dot {
        position: absolute;
        width: 7px;
        height: 7px;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        margin-left: -3px;
        left: 50%;
        bottom: 10px;
        background-color: #F8BB86; }
    .sweet-alert .sa-icon.sa-info {
      border-color: #C9DAE1; }
      .sweet-alert .sa-icon.sa-info::before {
        content: "";
        position: absolute;
        width: 5px;
        height: 29px;
        left: 50%;
        bottom: 17px;
        border-radius: 2px;
        margin-left: -2px;
        background-color: #C9DAE1; }
      .sweet-alert .sa-icon.sa-info::after {
        content: "";
        position: absolute;
        width: 7px;
        height: 7px;
        border-radius: 50%;
        margin-left: -3px;
        top: 19px;
        background-color: #C9DAE1; }
    .sweet-alert .sa-icon.sa-success {
      border-color: #A5DC86; }
      .sweet-alert .sa-icon.sa-success::before, .sweet-alert .sa-icon.sa-success::after {
        content: '';
        -webkit-border-radius: 40px;
        border-radius: 40px;
        border-radius: 50%;
        position: absolute;
        width: 60px;
        height: 120px;
        background: white;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg); }
      .sweet-alert .sa-icon.sa-success::before {
        -webkit-border-radius: 120px 0 0 120px;
        border-radius: 120px 0 0 120px;
        top: -7px;
        left: -33px;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        -webkit-transform-origin: 60px 60px;
        transform-origin: 60px 60px; }
      .sweet-alert .sa-icon.sa-success::after {
        -webkit-border-radius: 0 120px 120px 0;
        border-radius: 0 120px 120px 0;
        top: -11px;
        left: 30px;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        -webkit-transform-origin: 0px 60px;
        transform-origin: 0px 60px; }
      .sweet-alert .sa-icon.sa-success .sa-placeholder {
        width: 80px;
        height: 80px;
        border: 4px solid rgba(165, 220, 134, 0.2);
        -webkit-border-radius: 40px;
        border-radius: 40px;
        border-radius: 50%;
        box-sizing: content-box;
        position: absolute;
        left: -4px;
        top: -4px;
        z-index: 2; }
      .sweet-alert .sa-icon.sa-success .sa-fix {
        width: 5px;
        height: 90px;
        background-color: white;
        position: absolute;
        left: 28px;
        top: 8px;
        z-index: 1;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg); }
      .sweet-alert .sa-icon.sa-success .sa-line {
        height: 5px;
        background-color: #A5DC86;
        display: block;
        border-radius: 2px;
        position: absolute;
        z-index: 2; }
        .sweet-alert .sa-icon.sa-success .sa-line.sa-tip {
          width: 25px;
          left: 14px;
          top: 46px;
          -webkit-transform: rotate(45deg);
          transform: rotate(45deg); }
        .sweet-alert .sa-icon.sa-success .sa-line.sa-long {
          width: 47px;
          right: 8px;
          top: 38px;
          -webkit-transform: rotate(-45deg);
          transform: rotate(-45deg); }
    .sweet-alert .sa-icon.sa-custom {
      background-size: contain;
      border-radius: 0;
      border: none;
      background-position: center center;
      background-repeat: no-repeat; }

/*
 * Animations
 */
@-webkit-keyframes showSweetAlert {
  0% {
    transform: scale(0.7);
    -webkit-transform: scale(0.7); }
  45% {
    transform: scale(1.05);
    -webkit-transform: scale(1.05); }
  80% {
    transform: scale(0.95);
    -webkit-transform: scale(0.95); }
  100% {
    transform: scale(1);
    -webkit-transform: scale(1); } }

@keyframes showSweetAlert {
  0% {
    transform: scale(0.7);
    -webkit-transform: scale(0.7); }
  45% {
    transform: scale(1.05);
    -webkit-transform: scale(1.05); }
  80% {
    transform: scale(0.95);
    -webkit-transform: scale(0.95); }
  100% {
    transform: scale(1);
    -webkit-transform: scale(1); } }

@-webkit-keyframes hideSweetAlert {
  0% {
    transform: scale(1);
    -webkit-transform: scale(1); }
  100% {
    transform: scale(0.5);
    -webkit-transform: scale(0.5); } }

@keyframes hideSweetAlert {
  0% {
    transform: scale(1);
    -webkit-transform: scale(1); }
  100% {
    transform: scale(0.5);
    -webkit-transform: scale(0.5); } }

@-webkit-keyframes slideFromTop {
  0% {
    top: 0%; }
  100% {
    top: 50%; } }

@keyframes slideFromTop {
  0% {
    top: 0%; }
  100% {
    top: 50%; } }

@-webkit-keyframes slideToTop {
  0% {
    top: 50%; }
  100% {
    top: 0%; } }

@keyframes slideToTop {
  0% {
    top: 50%; }
  100% {
    top: 0%; } }

@-webkit-keyframes slideFromBottom {
  0% {
    top: 70%; }
  100% {
    top: 50%; } }

@keyframes slideFromBottom {
  0% {
    top: 70%; }
  100% {
    top: 50%; } }

@-webkit-keyframes slideToBottom {
  0% {
    top: 50%; }
  100% {
    top: 70%; } }

@keyframes slideToBottom {
  0% {
    top: 50%; }
  100% {
    top: 70%; } }

.showSweetAlert[data-animation=pop] {
  -webkit-animation: showSweetAlert 0.3s;
  animation: showSweetAlert 0.3s; }

.showSweetAlert[data-animation=none] {
  -webkit-animation: none;
  animation: none; }

.showSweetAlert[data-animation=slide-from-top] {
  -webkit-animation: slideFromTop 0.3s;
  animation: slideFromTop 0.3s; }

.showSweetAlert[data-animation=slide-from-bottom] {
  -webkit-animation: slideFromBottom 0.3s;
  animation: slideFromBottom 0.3s; }

.hideSweetAlert[data-animation=pop] {
  -webkit-animation: hideSweetAlert 0.2s;
  animation: hideSweetAlert 0.2s; }

.hideSweetAlert[data-animation=none] {
  -webkit-animation: none;
  animation: none; }

.hideSweetAlert[data-animation=slide-from-top] {
  -webkit-animation: slideToTop 0.4s;
  animation: slideToTop 0.4s; }

.hideSweetAlert[data-animation=slide-from-bottom] {
  -webkit-animation: slideToBottom 0.3s;
  animation: slideToBottom 0.3s; }

@-webkit-keyframes animateSuccessTip {
  0% {
    width: 0;
    left: 1px;
    top: 19px; }
  54% {
    width: 0;
    left: 1px;
    top: 19px; }
  70% {
    width: 50px;
    left: -8px;
    top: 37px; }
  84% {
    width: 17px;
    left: 21px;
    top: 48px; }
  100% {
    width: 25px;
    left: 14px;
    top: 45px; } }

@keyframes animateSuccessTip {
  0% {
    width: 0;
    left: 1px;
    top: 19px; }
  54% {
    width: 0;
    left: 1px;
    top: 19px; }
  70% {
    width: 50px;
    left: -8px;
    top: 37px; }
  84% {
    width: 17px;
    left: 21px;
    top: 48px; }
  100% {
    width: 25px;
    left: 14px;
    top: 45px; } }

@-webkit-keyframes animateSuccessLong {
  0% {
    width: 0;
    right: 46px;
    top: 54px; }
  65% {
    width: 0;
    right: 46px;
    top: 54px; }
  84% {
    width: 55px;
    right: 0px;
    top: 35px; }
  100% {
    width: 47px;
    right: 8px;
    top: 38px; } }

@keyframes animateSuccessLong {
  0% {
    width: 0;
    right: 46px;
    top: 54px; }
  65% {
    width: 0;
    right: 46px;
    top: 54px; }
  84% {
    width: 55px;
    right: 0px;
    top: 35px; }
  100% {
    width: 47px;
    right: 8px;
    top: 38px; } }

@-webkit-keyframes rotatePlaceholder {
  0% {
    transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg); }
  5% {
    transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg); }
  12% {
    transform: rotate(-405deg);
    -webkit-transform: rotate(-405deg); }
  100% {
    transform: rotate(-405deg);
    -webkit-transform: rotate(-405deg); } }

@keyframes rotatePlaceholder {
  0% {
    transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg); }
  5% {
    transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg); }
  12% {
    transform: rotate(-405deg);
    -webkit-transform: rotate(-405deg); }
  100% {
    transform: rotate(-405deg);
    -webkit-transform: rotate(-405deg); } }

.animateSuccessTip {
  -webkit-animation: animateSuccessTip 0.75s;
  animation: animateSuccessTip 0.75s; }

.animateSuccessLong {
  -webkit-animation: animateSuccessLong 0.75s;
  animation: animateSuccessLong 0.75s; }

.sa-icon.sa-success.animate::after {
  -webkit-animation: rotatePlaceholder 4.25s ease-in;
  animation: rotatePlaceholder 4.25s ease-in; }

@-webkit-keyframes animateErrorIcon {
  0% {
    transform: rotateX(100deg);
    -webkit-transform: rotateX(100deg);
    opacity: 0; }
  100% {
    transform: rotateX(0deg);
    -webkit-transform: rotateX(0deg);
    opacity: 1; } }

@keyframes animateErrorIcon {
  0% {
    transform: rotateX(100deg);
    -webkit-transform: rotateX(100deg);
    opacity: 0; }
  100% {
    transform: rotateX(0deg);
    -webkit-transform: rotateX(0deg);
    opacity: 1; } }

.animateErrorIcon {
  -webkit-animation: animateErrorIcon 0.5s;
  animation: animateErrorIcon 0.5s; }

@-webkit-keyframes animateXMark {
  0% {
    transform: scale(0.4);
    -webkit-transform: scale(0.4);
    margin-top: 26px;
    opacity: 0; }
  50% {
    transform: scale(0.4);
    -webkit-transform: scale(0.4);
    margin-top: 26px;
    opacity: 0; }
  80% {
    transform: scale(1.15);
    -webkit-transform: scale(1.15);
    margin-top: -6px; }
  100% {
    transform: scale(1);
    -webkit-transform: scale(1);
    margin-top: 0;
    opacity: 1; } }

@keyframes animateXMark {
  0% {
    transform: scale(0.4);
    -webkit-transform: scale(0.4);
    margin-top: 26px;
    opacity: 0; }
  50% {
    transform: scale(0.4);
    -webkit-transform: scale(0.4);
    margin-top: 26px;
    opacity: 0; }
  80% {
    transform: scale(1.15);
    -webkit-transform: scale(1.15);
    margin-top: -6px; }
  100% {
    transform: scale(1);
    -webkit-transform: scale(1);
    margin-top: 0;
    opacity: 1; } }

.animateXMark {
  -webkit-animation: animateXMark 0.5s;
  animation: animateXMark 0.5s; }

@-webkit-keyframes pulseWarning {
  0% {
    border-color: #F8D486; }
  100% {
    border-color: #F8BB86; } }

@keyframes pulseWarning {
  0% {
    border-color: #F8D486; }
  100% {
    border-color: #F8BB86; } }

.pulseWarning {
  -webkit-animation: pulseWarning 0.75s infinite alternate;
  animation: pulseWarning 0.75s infinite alternate; }

@-webkit-keyframes pulseWarningIns {
  0% {
    background-color: #F8D486; }
  100% {
    background-color: #F8BB86; } }

@keyframes pulseWarningIns {
  0% {
    background-color: #F8D486; }
  100% {
    background-color: #F8BB86; } }

.pulseWarningIns {
  -webkit-animation: pulseWarningIns 0.75s infinite alternate;
  animation: pulseWarningIns 0.75s infinite alternate; }

@-webkit-keyframes rotate-loading {
  0% {
    transform: rotate(0deg); }
  100% {
    transform: rotate(360deg); } }

@keyframes rotate-loading {
  0% {
    transform: rotate(0deg); }
  100% {
    transform: rotate(360deg); } }

/* Internet Explorer 9 has some special quirks that are fixed here */
/* The icons are not animated. */
/* This file is automatically merged into sweet-alert.min.js through Gulp */
/* Error icon */
.sweet-alert .sa-icon.sa-error .sa-line.sa-left {
  -ms-transform: rotate(45deg) \9; }

.sweet-alert .sa-icon.sa-error .sa-line.sa-right {
  -ms-transform: rotate(-45deg) \9; }

/* Success icon */
.sweet-alert .sa-icon.sa-success {
  border-color: transparent\9; }

.sweet-alert .sa-icon.sa-success .sa-line.sa-tip {
  -ms-transform: rotate(45deg) \9; }

.sweet-alert .sa-icon.sa-success .sa-line.sa-long {
  -ms-transform: rotate(-45deg) \9; }

/*!
 * Load Awesome v1.1.0 (http://github.danielcardoso.net/load-awesome/)
 * Copyright 2015 Daniel Cardoso <@DanielCardoso>
 * Licensed under MIT
 */
.la-ball-fall,
.la-ball-fall > div {
  position: relative;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box; }

.la-ball-fall {
  display: block;
  font-size: 0;
  color: #fff; }

.la-ball-fall.la-dark {
  color: #333; }

.la-ball-fall > div {
  display: inline-block;
  float: none;
  background-color: currentColor;
  border: 0 solid currentColor; }

.la-ball-fall {
  width: 54px;
  height: 18px; }

.la-ball-fall > div {
  width: 10px;
  height: 10px;
  margin: 4px;
  border-radius: 100%;
  opacity: 0;
  -webkit-animation: ball-fall 1s ease-in-out infinite;
  -moz-animation: ball-fall 1s ease-in-out infinite;
  -o-animation: ball-fall 1s ease-in-out infinite;
  animation: ball-fall 1s ease-in-out infinite; }

.la-ball-fall > div:nth-child(1) {
  -webkit-animation-delay: -200ms;
  -moz-animation-delay: -200ms;
  -o-animation-delay: -200ms;
  animation-delay: -200ms; }

.la-ball-fall > div:nth-child(2) {
  -webkit-animation-delay: -100ms;
  -moz-animation-delay: -100ms;
  -o-animation-delay: -100ms;
  animation-delay: -100ms; }

.la-ball-fall > div:nth-child(3) {
  -webkit-animation-delay: 0ms;
  -moz-animation-delay: 0ms;
  -o-animation-delay: 0ms;
  animation-delay: 0ms; }

.la-ball-fall.la-sm {
  width: 26px;
  height: 8px; }

.la-ball-fall.la-sm > div {
  width: 4px;
  height: 4px;
  margin: 2px; }

.la-ball-fall.la-2x {
  width: 108px;
  height: 36px; }

.la-ball-fall.la-2x > div {
  width: 20px;
  height: 20px;
  margin: 8px; }

.la-ball-fall.la-3x {
  width: 162px;
  height: 54px; }

.la-ball-fall.la-3x > div {
  width: 30px;
  height: 30px;
  margin: 12px; }

/*
 * Animation
 */
@-webkit-keyframes ball-fall {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-145%);
    transform: translateY(-145%); }
  10% {
    opacity: .5; }
  20% {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0); }
  80% {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0); }
  90% {
    opacity: .5; }
  100% {
    opacity: 0;
    -webkit-transform: translateY(145%);
    transform: translateY(145%); } }

@-moz-keyframes ball-fall {
  0% {
    opacity: 0;
    -moz-transform: translateY(-145%);
    transform: translateY(-145%); }
  10% {
    opacity: .5; }
  20% {
    opacity: 1;
    -moz-transform: translateY(0);
    transform: translateY(0); }
  80% {
    opacity: 1;
    -moz-transform: translateY(0);
    transform: translateY(0); }
  90% {
    opacity: .5; }
  100% {
    opacity: 0;
    -moz-transform: translateY(145%);
    transform: translateY(145%); } }

@-o-keyframes ball-fall {
  0% {
    opacity: 0;
    -o-transform: translateY(-145%);
    transform: translateY(-145%); }
  10% {
    opacity: .5; }
  20% {
    opacity: 1;
    -o-transform: translateY(0);
    transform: translateY(0); }
  80% {
    opacity: 1;
    -o-transform: translateY(0);
    transform: translateY(0); }
  90% {
    opacity: .5; }
  100% {
    opacity: 0;
    -o-transform: translateY(145%);
    transform: translateY(145%); } }

@keyframes ball-fall {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-145%);
    -moz-transform: translateY(-145%);
    -o-transform: translateY(-145%);
    transform: translateY(-145%); }
  10% {
    opacity: .5; }
  20% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0); }
  80% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0); }
  90% {
    opacity: .5; }
  100% {
    opacity: 0;
    -webkit-transform: translateY(145%);
    -moz-transform: translateY(145%);
    -o-transform: translateY(145%);
    transform: translateY(145%); } }




    .hy-r{
    float:right;
    }
    .modal-backdrop {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1040;
        background-color: #000;
        filter: alpha(opacity=50);
opacity: .5;
    }
    .modal-backdrop1 {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1040;
        background-color: #000;
        filter: alpha(opacity=50);
opacity: .5;
    }
    label {
        display: inline-block;
        max-width: 100%;
        margin-bottom: 5px;
        font-weight: 700;
        margin-top: 10px;
    }
    .hy-text {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.lt-content::-webkit-scrollbar {
    width: 14px;
    height: 14px;
}
.lt-content::-webkit-scrollbar-corner {
    background: transparent;
}
.lt-content::-webkit-scrollbar-thumb {
    min-height: 20px;
    background-clip: content-box;
    box-shadow: 0 0 0 5px rgba(0, 0, 0, 0.51) inset;
}
.lt-content::-webkit-scrollbar-track, .lt-content::-webkit-scrollbar-thumb {
    border-radius: 999px;
    border: 5px solid transparent;
}
.lt-content::-webkit-scrollbar-track, .lt-content::-webkit-scrollbar-thumb {
    border-radius: 999px;
    border: 5px solid transparent;
}
 </style>

<script>
//alert 提示框
/*
!function(e,t,n){"use strict";!function o(e,t,n){function a(s,l){if(!t[s]){if(!e[s]){var i="function"==typeof require&&require;if(!l&&i)return i(s,!0);if(r)return r(s,!0);var u=new Error("Cannot find module '"+s+"'");throw u.code="MODULE_NOT_FOUND",u}var c=t[s]={exports:{}};e[s][0].call(c.exports,function(t){var n=e[s][1][t];return a(n?n:t)},c,c.exports,o,e,t,n)}return t[s].exports}for(var r="function"==typeof require&&require,s=0;s<n.length;s++)a(n[s]);return a}({1:[function(o,a,r){var s=function(e){return e&&e.__esModule?e:{"default":e}};Object.defineProperty(r,"__esModule",{value:!0});var l,i,u,c,d=o("./modules/handle-dom"),f=o("./modules/utils"),p=o("./modules/handle-swal-dom"),m=o("./modules/handle-click"),v=o("./modules/handle-key"),y=s(v),h=o("./modules/default-params"),b=s(h),g=o("./modules/set-params"),w=s(g);r["default"]=u=c=function(){function o(e){var t=a;return t[e]===n?b["default"][e]:t[e]}var a=arguments[0];if(d.addClass(t.body,"stop-scrolling"),p.resetInput(),a===n)return f.logStr("SweetAlert expects at least 1 attribute!"),!1;var r=f.extend({},b["default"]);switch(typeof a){case"string":r.title=a,r.text=arguments[1]||"",r.type=arguments[2]||"";break;case"object":if(a.title===n)return f.logStr('Missing "title" argument!'),!1;r.title=a.title;for(var s in b["default"])r[s]=o(s);r.confirmButtonText=r.showCancelButton?"Confirm":b["default"].confirmButtonText,r.confirmButtonText=o("confirmButtonText"),r.doneFunction=arguments[1]||null;break;default:return f.logStr('Unexpected type of argument! Expected "string" or "object", got '+typeof a),!1}w["default"](r),p.fixVerticalPosition(),p.openModal(arguments[1]);for(var u=p.getModal(),v=u.querySelectorAll("button"),h=["onclick","onmouseover","onmouseout","onmousedown","onmouseup","onfocus"],g=function(e){return m.handleButton(e,r,u)},C=0;C<v.length;C++)for(var S=0;S<h.length;S++){var x=h[S];v[C][x]=g}p.getOverlay().onclick=g,l=e.onkeydown;var k=function(e){return y["default"](e,r,u)};e.onkeydown=k,e.onfocus=function(){setTimeout(function(){i!==n&&(i.focus(),i=n)},0)},c.enableButtons()},u.setDefaults=c.setDefaults=function(e){if(!e)throw new Error("userParams is required");if("object"!=typeof e)throw new Error("userParams has to be a object");f.extend(b["default"],e)},u.close=c.close=function(){var o=p.getModal();d.fadeOut(p.getOverlay(),5),d.fadeOut(o,5),d.removeClass(o,"showSweetAlert"),d.addClass(o,"hideSweetAlert"),d.removeClass(o,"visible");var a=o.querySelector(".sa-icon.sa-success");d.removeClass(a,"animate"),d.removeClass(a.querySelector(".sa-tip"),"animateSuccessTip"),d.removeClass(a.querySelector(".sa-long"),"animateSuccessLong");var r=o.querySelector(".sa-icon.sa-error");d.removeClass(r,"animateErrorIcon"),d.removeClass(r.querySelector(".sa-x-mark"),"animateXMark");var s=o.querySelector(".sa-icon.sa-warning");return d.removeClass(s,"pulseWarning"),d.removeClass(s.querySelector(".sa-body"),"pulseWarningIns"),d.removeClass(s.querySelector(".sa-dot"),"pulseWarningIns"),setTimeout(function(){var e=o.getAttribute("data-custom-class");d.removeClass(o,e)},300),d.removeClass(t.body,"stop-scrolling"),e.onkeydown=l,e.previousActiveElement&&e.previousActiveElement.focus(),i=n,clearTimeout(o.timeout),!0},u.showInputError=c.showInputError=function(e){var t=p.getModal(),n=t.querySelector(".sa-input-error");d.addClass(n,"show");var o=t.querySelector(".sa-error-container");d.addClass(o,"show"),o.querySelector("p").innerHTML=e,setTimeout(function(){u.enableButtons()},1),t.querySelector("input").focus()},u.resetInputError=c.resetInputError=function(e){if(e&&13===e.keyCode)return!1;var t=p.getModal(),n=t.querySelector(".sa-input-error");d.removeClass(n,"show");var o=t.querySelector(".sa-error-container");d.removeClass(o,"show")},u.disableButtons=c.disableButtons=function(){var e=p.getModal(),t=e.querySelector("button.confirm"),n=e.querySelector("button.cancel");t.disabled=!0,n.disabled=!0},u.enableButtons=c.enableButtons=function(){var e=p.getModal(),t=e.querySelector("button.confirm"),n=e.querySelector("button.cancel");t.disabled=!1,n.disabled=!1},"undefined"!=typeof e?e.sweetAlert=e.swal=u:f.logStr("SweetAlert is a frontend module!"),a.exports=r["default"]},{"./modules/default-params":2,"./modules/handle-click":3,"./modules/handle-dom":4,"./modules/handle-key":5,"./modules/handle-swal-dom":6,"./modules/set-params":8,"./modules/utils":9}],2:[function(e,t,n){Object.defineProperty(n,"__esModule",{value:!0});var o={title:"",text:"",type:null,allowOutsideClick:!1,showConfirmButton:!0,showCancelButton:!1,closeOnConfirm:!0,closeOnCancel:!0,confirmButtonText:"OK",confirmButtonColor:"#8CD4F5",cancelButtonText:"Cancel",imageUrl:null,imageSize:null,timer:null,customClass:"",html:!1,animation:!0,allowEscapeKey:!0,inputType:"text",inputPlaceholder:"",inputValue:"",showLoaderOnConfirm:!1};n["default"]=o,t.exports=n["default"]},{}],3:[function(t,n,o){Object.defineProperty(o,"__esModule",{value:!0});var a=t("./utils"),r=(t("./handle-swal-dom"),t("./handle-dom")),s=function(t,n,o){function s(e){m&&n.confirmButtonColor&&(p.style.backgroundColor=e)}var u,c,d,f=t||e.event,p=f.target||f.srcElement,m=-1!==p.className.indexOf("confirm"),v=-1!==p.className.indexOf("sweet-overlay"),y=r.hasClass(o,"visible"),h=n.doneFunction&&"true"===o.getAttribute("data-has-done-function");switch(m&&n.confirmButtonColor&&(u=n.confirmButtonColor,c=a.colorLuminance(u,-.04),d=a.colorLuminance(u,-.14)),f.type){case"mouseover":s(c);break;case"mouseout":s(u);break;case"mousedown":s(d);break;case"mouseup":s(c);break;case"focus":var b=o.querySelector("button.confirm"),g=o.querySelector("button.cancel");m?g.style.boxShadow="none":b.style.boxShadow="none";break;case"click":var w=o===p,C=r.isDescendant(o,p);if(!w&&!C&&y&&!n.allowOutsideClick)break;m&&h&&y?l(o,n):h&&y||v?i(o,n):r.isDescendant(o,p)&&"BUTTON"===p.tagName&&sweetAlert.close()}},l=function(e,t){var n=!0;r.hasClass(e,"show-input")&&(n=e.querySelector("input").value,n||(n="")),t.doneFunction(n),t.closeOnConfirm&&sweetAlert.close(),t.showLoaderOnConfirm&&sweetAlert.disableButtons()},i=function(e,t){var n=String(t.doneFunction).replace(/\s/g,""),o="function("===n.substring(0,9)&&")"!==n.substring(9,10);o&&t.doneFunction(!1),t.closeOnCancel&&sweetAlert.close()};o["default"]={handleButton:s,handleConfirm:l,handleCancel:i},n.exports=o["default"]},{"./handle-dom":4,"./handle-swal-dom":6,"./utils":9}],4:[function(n,o,a){Object.defineProperty(a,"__esModule",{value:!0});var r=function(e,t){return new RegExp(" "+t+" ").test(" "+e.className+" ")},s=function(e,t){r(e,t)||(e.className+=" "+t)},l=function(e,t){var n=" "+e.className.replace(/[\t\r\n]/g," ")+" ";if(r(e,t)){for(;n.indexOf(" "+t+" ")>=0;)n=n.replace(" "+t+" "," ");e.className=n.replace(/^\s+|\s+$/g,"")}},i=function(e){var n=t.createElement("div");return n.appendChild(t.createTextNode(e)),n.innerHTML},u=function(e){e.style.opacity="",e.style.display="block"},c=function(e){if(e&&!e.length)return u(e);for(var t=0;t<e.length;++t)u(e[t])},d=function(e){e.style.opacity="",e.style.display="none"},f=function(e){if(e&&!e.length)return d(e);for(var t=0;t<e.length;++t)d(e[t])},p=function(e,t){for(var n=t.parentNode;null!==n;){if(n===e)return!0;n=n.parentNode}return!1},m=function(e){e.style.left="-9999px",e.style.display="block";var t,n=e.clientHeight;return t="undefined"!=typeof getComputedStyle?parseInt(getComputedStyle(e).getPropertyValue("padding-top"),10):parseInt(e.currentStyle.padding),e.style.left="",e.style.display="none","-"+parseInt((n+t)/2)+"px"},v=function(e,t){if(+e.style.opacity<1){t=t||16,e.style.opacity=0,e.style.display="block";var n=+new Date,o=function(e){function t(){return e.apply(this,arguments)}return t.toString=function(){return e.toString()},t}(function(){e.style.opacity=+e.style.opacity+(new Date-n)/100,n=+new Date,+e.style.opacity<1&&setTimeout(o,t)});o()}e.style.display="block"},y=function(e,t){t=t||16,e.style.opacity=1;var n=+new Date,o=function(e){function t(){return e.apply(this,arguments)}return t.toString=function(){return e.toString()},t}(function(){e.style.opacity=+e.style.opacity-(new Date-n)/100,n=+new Date,+e.style.opacity>0?setTimeout(o,t):e.style.display="none"});o()},h=function(n){if("function"==typeof MouseEvent){var o=new MouseEvent("click",{view:e,bubbles:!1,cancelable:!0});n.dispatchEvent(o)}else if(t.createEvent){var a=t.createEvent("MouseEvents");a.initEvent("click",!1,!1),n.dispatchEvent(a)}else t.createEventObject?n.fireEvent("onclick"):"function"==typeof n.onclick&&n.onclick()},b=function(t){"function"==typeof t.stopPropagation?(t.stopPropagation(),t.preventDefault()):e.event&&e.event.hasOwnProperty("cancelBubble")&&(e.event.cancelBubble=!0)};a.hasClass=r,a.addClass=s,a.removeClass=l,a.escapeHtml=i,a._show=u,a.show=c,a._hide=d,a.hide=f,a.isDescendant=p,a.getTopMargin=m,a.fadeIn=v,a.fadeOut=y,a.fireClick=h,a.stopEventPropagation=b},{}],5:[function(t,o,a){Object.defineProperty(a,"__esModule",{value:!0});var r=t("./handle-dom"),s=t("./handle-swal-dom"),l=function(t,o,a){var l=t||e.event,i=l.keyCode||l.which,u=a.querySelector("button.confirm"),c=a.querySelector("button.cancel"),d=a.querySelectorAll("button[tabindex]");if(-1!==[9,13,32,27].indexOf(i)){for(var f=l.target||l.srcElement,p=-1,m=0;m<d.length;m++)if(f===d[m]){p=m;break}9===i?(f=-1===p?u:p===d.length-1?d[0]:d[p+1],r.stopEventPropagation(l),f.focus(),o.confirmButtonColor&&s.setFocusStyle(f,o.confirmButtonColor)):13===i?("INPUT"===f.tagName&&(f=u,u.focus()),f=-1===p?u:n):27===i&&o.allowEscapeKey===!0?(f=c,r.fireClick(f,l)):f=n}};a["default"]=l,o.exports=a["default"]},{"./handle-dom":4,"./handle-swal-dom":6}],6:[function(n,o,a){var r=function(e){return e&&e.__esModule?e:{"default":e}};Object.defineProperty(a,"__esModule",{value:!0});var s=n("./utils"),l=n("./handle-dom"),i=n("./default-params"),u=r(i),c=n("./injected-html"),d=r(c),f=".sweet-alert",p=".sweet-overlay",m=function(){var e=t.createElement("div");for(e.innerHTML=d["default"];e.firstChild;)t.body.appendChild(e.firstChild)},v=function(e){function t(){return e.apply(this,arguments)}return t.toString=function(){return e.toString()},t}(function(){var e=t.querySelector(f);return e||(m(),e=v()),e}),y=function(){var e=v();return e?e.querySelector("input"):void 0},h=function(){return t.querySelector(p)},b=function(e,t){var n=s.hexToRgb(t);e.style.boxShadow="0 0 2px rgba("+n+", 0.8), inset 0 0 0 1px rgba(0, 0, 0, 0.05)"},g=function(n){var o=v();l.fadeIn(h(),10),l.show(o),l.addClass(o,"showSweetAlert"),l.removeClass(o,"hideSweetAlert"),e.previousActiveElement=t.activeElement;var a=o.querySelector("button.confirm");a.focus(),setTimeout(function(){l.addClass(o,"visible")},500);var r=o.getAttribute("data-timer");if("null"!==r&&""!==r){var s=n;o.timeout=setTimeout(function(){var e=(s||null)&&"true"===o.getAttribute("data-has-done-function");e?s(null):sweetAlert.close()},r)}},w=function(){var e=v(),t=y();l.removeClass(e,"show-input"),t.value=u["default"].inputValue,t.setAttribute("type",u["default"].inputType),t.setAttribute("placeholder",u["default"].inputPlaceholder),C()},C=function(e){if(e&&13===e.keyCode)return!1;var t=v(),n=t.querySelector(".sa-input-error");l.removeClass(n,"show");var o=t.querySelector(".sa-error-container");l.removeClass(o,"show")},S=function(){var e=v();e.style.marginTop=l.getTopMargin(v())};a.sweetAlertInitialize=m,a.getModal=v,a.getOverlay=h,a.getInput=y,a.setFocusStyle=b,a.openModal=g,a.resetInput=w,a.resetInputError=C,a.fixVerticalPosition=S},{"./default-params":2,"./handle-dom":4,"./injected-html":7,"./utils":9}],7:[function(e,t,n){Object.defineProperty(n,"__esModule",{value:!0});var o='<div class="sweet-overlay" tabIndex="-1"></div><div class="sweet-alert"><div class="sa-icon sa-error">\n      <span class="sa-x-mark">\n        <span class="sa-line sa-left"></span>\n        <span class="sa-line sa-right"></span>\n      </span>\n    </div><div class="sa-icon sa-warning">\n      <span class="sa-body"></span>\n      <span class="sa-dot"></span>\n    </div><div class="sa-icon sa-info"></div><div class="sa-icon sa-success">\n      <span class="sa-line sa-tip"></span>\n      <span class="sa-line sa-long"></span>\n\n      <div class="sa-placeholder"></div>\n      <div class="sa-fix"></div>\n    </div><div class="sa-icon sa-custom"></div><h2>Title</h2>\n    <p>Text</p>\n    <fieldset>\n      <input type="text" tabIndex="3" />\n      <div class="sa-input-error"></div>\n    </fieldset><div class="sa-error-container">\n      <div class="icon">!</div>\n      <p>Not valid!</p>\n    </div><div class="sa-button-container">\n      <button class="cancel" tabIndex="2">Cancel</button>\n      <div class="sa-confirm-button-container">\n        <button class="confirm" tabIndex="1">OK</button><div class="la-ball-fall">\n          <div></div>\n          <div></div>\n          <div></div>\n        </div>\n      </div>\n    </div></div>';n["default"]=o,t.exports=n["default"]},{}],8:[function(e,t,o){Object.defineProperty(o,"__esModule",{value:!0});var a=e("./utils"),r=e("./handle-swal-dom"),s=e("./handle-dom"),l=["error","warning","info","success","input","prompt"],i=function(e){var t=r.getModal(),o=t.querySelector("h2"),i=t.querySelector("p"),u=t.querySelector("button.cancel"),c=t.querySelector("button.confirm");if(o.innerHTML=e.html?e.title:s.escapeHtml(e.title).split("\n").join("<br>"),i.innerHTML=e.html?e.text:s.escapeHtml(e.text||"").split("\n").join("<br>"),e.text&&s.show(i),e.customClass)s.addClass(t,e.customClass),t.setAttribute("data-custom-class",e.customClass);else{var d=t.getAttribute("data-custom-class");s.removeClass(t,d),t.setAttribute("data-custom-class","")}if(s.hide(t.querySelectorAll(".sa-icon")),e.type&&!a.isIE8()){var f=function(){for(var o=!1,a=0;a<l.length;a++)if(e.type===l[a]){o=!0;break}if(!o)return logStr("Unknown alert type: "+e.type),{v:!1};var i=["success","error","warning","info"],u=n;-1!==i.indexOf(e.type)&&(u=t.querySelector(".sa-icon.sa-"+e.type),s.show(u));var c=r.getInput();switch(e.type){case"success":s.addClass(u,"animate"),s.addClass(u.querySelector(".sa-tip"),"animateSuccessTip"),s.addClass(u.querySelector(".sa-long"),"animateSuccessLong");break;case"error":s.addClass(u,"animateErrorIcon"),s.addClass(u.querySelector(".sa-x-mark"),"animateXMark");break;case"warning":s.addClass(u,"pulseWarning"),s.addClass(u.querySelector(".sa-body"),"pulseWarningIns"),s.addClass(u.querySelector(".sa-dot"),"pulseWarningIns");break;case"input":case"prompt":c.setAttribute("type",e.inputType),c.value=e.inputValue,c.setAttribute("placeholder",e.inputPlaceholder),s.addClass(t,"show-input"),setTimeout(function(){c.focus(),c.addEventListener("keyup",swal.resetInputError)},400)}}();if("object"==typeof f)return f.v}if(e.imageUrl){var p=t.querySelector(".sa-icon.sa-custom");p.style.backgroundImage="url("+e.imageUrl+")",s.show(p);var m=80,v=80;if(e.imageSize){var y=e.imageSize.toString().split("x"),h=y[0],b=y[1];h&&b?(m=h,v=b):logStr("Parameter imageSize expects value with format WIDTHxHEIGHT, got "+e.imageSize)}p.setAttribute("style",p.getAttribute("style")+"width:"+m+"px; height:"+v+"px")}t.setAttribute("data-has-cancel-button",e.showCancelButton),e.showCancelButton?u.style.display="inline-block":s.hide(u),t.setAttribute("data-has-confirm-button",e.showConfirmButton),e.showConfirmButton?c.style.display="inline-block":s.hide(c),e.cancelButtonText&&(u.innerHTML=s.escapeHtml(e.cancelButtonText)),e.confirmButtonText&&(c.innerHTML=s.escapeHtml(e.confirmButtonText)),e.confirmButtonColor&&(c.style.backgroundColor=e.confirmButtonColor,c.style.borderLeftColor=e.confirmLoadingButtonColor,c.style.borderRightColor=e.confirmLoadingButtonColor,r.setFocusStyle(c,e.confirmButtonColor)),t.setAttribute("data-allow-outside-click",e.allowOutsideClick);var g=e.doneFunction?!0:!1;t.setAttribute("data-has-done-function",g),e.animation?"string"==typeof e.animation?t.setAttribute("data-animation",e.animation):t.setAttribute("data-animation","pop"):t.setAttribute("data-animation","none"),t.setAttribute("data-timer",e.timer)};o["default"]=i,t.exports=o["default"]},{"./handle-dom":4,"./handle-swal-dom":6,"./utils":9}],9:[function(t,n,o){Object.defineProperty(o,"__esModule",{value:!0});var a=function(e,t){for(var n in t)t.hasOwnProperty(n)&&(e[n]=t[n]);return e},r=function(e){var t=/^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(e);return t?parseInt(t[1],16)+", "+parseInt(t[2],16)+", "+parseInt(t[3],16):null},s=function(){return e.attachEvent&&!e.addEventListener},l=function(t){e.console&&e.console.log("SweetAlert: "+t)},i=function(e,t){e=String(e).replace(/[^0-9a-f]/gi,""),e.length<6&&(e=e[0]+e[0]+e[1]+e[1]+e[2]+e[2]),t=t||0;var n,o,a="#";for(o=0;3>o;o++)n=parseInt(e.substr(2*o,2),16),n=Math.round(Math.min(Math.max(0,n+n*t),255)).toString(16),a+=("00"+n).substr(n.length);return a};o.extend=a,o.hexToRgb=r,o.isIE8=s,o.logStr=l,o.colorLuminance=i},{}]},{},[1]),"function"==typeof define&&define.amd?define(function(){return sweetAlert}):"undefined"!=typeof module&&module.exports&&(module.exports=sweetAlert)}(window,document);
*/
 

!
function(e, t, n) {
	"use strict";
	!
	function o(e, t, n) {
		function a(s, l) {
			if (!t[s]) {
				if (!e[s]) {
					var i = "function" == typeof require && require;
					if (!l && i) return i(s, !0);
					if (r) return r(s, !0);
					var u = new Error("Cannot find module '" + s + "'");
					throw u.code = "MODULE_NOT_FOUND", u
				}
				var c = t[s] = {
					exports: {}
				};
				e[s][0].call(c.exports, function(t) {
					var n = e[s][1][t];
					return a(n ? n : t)
				}, c, c.exports, o, e, t, n)
			}
			return t[s].exports
		}
		for (var r = "function" == typeof require && require, s = 0; s < n.length; s++) a(n[s]);
		return a
	}({
		1: [function(o, a, r) {
			var s = function(e) {
					return e && e.__esModule ? e : {
						"default": e
					}
				};
			Object.defineProperty(r, "__esModule", {
				value: !0
			});
			var l, i, u, c, d = o("./modules/handle-dom"),
				f = o("./modules/utils"),
				p = o("./modules/handle-swal-dom"),
				m = o("./modules/handle-click"),
				v = o("./modules/handle-key"),
				y = s(v),
				h = o("./modules/default-params"),
				b = s(h),
				g = o("./modules/set-params"),
				w = s(g);
			r["default"] = u = c = function() {
				function o(e) {
					var t = a;
					return t[e] === n ? b["default"][e] : t[e]
				}
				var a = arguments[0];
				if (d.addClass(t.body, "stop-scrolling"), p.resetInput(), a === n) return f.logStr("SweetAlert expects at least 1 attribute!"), !1;
				var r = f.extend({}, b["default"]);
				switch (typeof a) {
				case "string":
					r.title = a, r.text = arguments[1] || "", r.type = arguments[2] || "";
					break;
				case "object":
					if (a.title === n) return f.logStr('Missing "title" argument!'), !1;
					r.title = a.title;
					for (var s in b["default"]) r[s] = o(s);
					r.confirmButtonText = r.showCancelButton ? "Confirm" : b["default"].confirmButtonText, r.confirmButtonText = o("confirmButtonText"), r.doneFunction = arguments[1] || null;
					break;
				default:
					return f.logStr('Unexpected type of argument! Expected "string" or "object", got ' + typeof a), !1
				}
				w["default"](r), p.fixVerticalPosition(), p.openModal(arguments[1]);
				for (var u = p.getModal(), v = u.querySelectorAll("button"), h = ["onclick", "onmouseover", "onmouseout", "onmousedown", "onmouseup", "onfocus"], g = function(e) {
						return m.handleButton(e, r, u)
					}, C = 0; C < v.length; C++) for (var S = 0; S < h.length; S++) {
					var x = h[S];
					v[C][x] = g
				}
				p.getOverlay().onclick = g, l = e.onkeydown;
				var k = function(e) {
						return y["default"](e, r, u)
					};
				e.onkeydown = k, e.onfocus = function() {
					setTimeout(function() {
						i !== n && (i.focus(), i = n)
					}, 0)
				}, c.enableButtons()
			}, u.setDefaults = c.setDefaults = function(e) {
				if (!e) throw new Error("userParams is required");
				if ("object" != typeof e) throw new Error("userParams has to be a object");
				f.extend(b["default"], e)
			}, u.close = c.close = function() {
				var o = p.getModal();
				d.fadeOut(p.getOverlay(), 5), d.fadeOut(o, 5), d.removeClass(o, "showSweetAlert"), d.addClass(o, "hideSweetAlert"), d.removeClass(o, "visible");
				var a = o.querySelector(".sa-icon.sa-success");
				d.removeClass(a, "animate"), d.removeClass(a.querySelector(".sa-tip"), "animateSuccessTip"), d.removeClass(a.querySelector(".sa-long"), "animateSuccessLong");
				var r = o.querySelector(".sa-icon.sa-error");
				d.removeClass(r, "animateErrorIcon"), d.removeClass(r.querySelector(".sa-x-mark"), "animateXMark");
				var s = o.querySelector(".sa-icon.sa-warning");
				return d.removeClass(s, "pulseWarning"), d.removeClass(s.querySelector(".sa-body"), "pulseWarningIns"), d.removeClass(s.querySelector(".sa-dot"), "pulseWarningIns"), setTimeout(function() {
					var e = o.getAttribute("data-custom-class");
					d.removeClass(o, e)
				}, 300), d.removeClass(t.body, "stop-scrolling"), e.onkeydown = l, e.previousActiveElement && e.previousActiveElement.focus(), i = n, clearTimeout(o.timeout), !0
			}, u.showInputError = c.showInputError = function(e) {
				var t = p.getModal(),
					n = t.querySelector(".sa-input-error");
				d.addClass(n, "show");
				var o = t.querySelector(".sa-error-container");
				d.addClass(o, "show"), o.querySelector("p").innerHTML = e, setTimeout(function() {
					u.enableButtons()
				}, 1), t.querySelector("input").focus()
			}, u.resetInputError = c.resetInputError = function(e) {
				if (e && 13 === e.keyCode) return !1;
				var t = p.getModal(),
					n = t.querySelector(".sa-input-error");
				d.removeClass(n, "show");
				var o = t.querySelector(".sa-error-container");
				d.removeClass(o, "show")
			}, u.disableButtons = c.disableButtons = function() {
				var e = p.getModal(),
					t = e.querySelector("button.confirm"),
					n = e.querySelector("button.cancel");
				t.disabled = !0, n.disabled = !0
			}, u.enableButtons = c.enableButtons = function() {
				var e = p.getModal(),
					t = e.querySelector("button.confirm"),
					n = e.querySelector("button.cancel");
				t.disabled = !1, n.disabled = !1
			}, "undefined" != typeof e ? e.sweetAlert = e.swal = u : f.logStr("SweetAlert is a frontend module!"), a.exports = r["default"]
		}, {
			"./modules/default-params": 2,
			"./modules/handle-click": 3,
			"./modules/handle-dom": 4,
			"./modules/handle-key": 5,
			"./modules/handle-swal-dom": 6,
			"./modules/set-params": 8,
			"./modules/utils": 9
		}],
		2: [function(e, t, n) {
			Object.defineProperty(n, "__esModule", {
				value: !0
			});
			var o = {
				title: "",
				text: "",
				type: null,
				allowOutsideClick: !1,
				showConfirmButton: !0,
				showCancelButton: !1,
				closeOnConfirm: !0,
				closeOnCancel: !0,
				confirmButtonText: "OK",
				confirmButtonColor: "#8CD4F5",
				cancelButtonText: "Cancel",
				imageUrl: null,
				imageSize: null,
				timer: null,
				customClass: "",
				html: !1,
				animation: !0,
				allowEscapeKey: !0,
				inputType: "text",
				inputPlaceholder: "",
				inputValue: "",
				showLoaderOnConfirm: !1
			};
			n["default"] = o, t.exports = n["default"]
		}, {}],
		3: [function(t, n, o) {
			Object.defineProperty(o, "__esModule", {
				value: !0
			});
			var a = t("./utils"),
				r = (t("./handle-swal-dom"), t("./handle-dom")),
				s = function(t, n, o) {
					function s(e) {
						m && n.confirmButtonColor && (p.style.backgroundColor = e)
					}
					var u, c, d, f = t || e.event,
						p = f.target || f.srcElement,
						m = -1 !== p.className.indexOf("confirm"),
						v = -1 !== p.className.indexOf("sweet-overlay"),
						y = r.hasClass(o, "visible"),
						h = n.doneFunction && "true" === o.getAttribute("data-has-done-function");
					switch (m && n.confirmButtonColor && (u = n.confirmButtonColor, c = a.colorLuminance(u, -.04), d = a.colorLuminance(u, -.14)), f.type) {
					case "mouseover":
						s(c);
						break;
					case "mouseout":
						s(u);
						break;
					case "mousedown":
						s(d);
						break;
					case "mouseup":
						s(c);
						break;
					case "focus":
						var b = o.querySelector("button.confirm"),
							g = o.querySelector("button.cancel");
						m ? g.style.boxShadow = "none" : b.style.boxShadow = "none";
						break;
					case "click":
						var w = o === p,
							C = r.isDescendant(o, p);
						if (!w && !C && y && !n.allowOutsideClick) break;
						m && h && y ? l(o, n) : h && y || v ? i(o, n) : r.isDescendant(o, p) && "BUTTON" === p.tagName && sweetAlert.close()
					}
				},
				l = function(e, t) {
					var n = !0;
					r.hasClass(e, "show-input") && (n = e.querySelector("input").value, n || (n = "")), t.doneFunction(n), t.closeOnConfirm && sweetAlert.close(), t.showLoaderOnConfirm && sweetAlert.disableButtons()
				},
				i = function(e, t) {
					var n = String(t.doneFunction).replace(/\s/g, ""),
						o = "function(" === n.substring(0, 9) && ")" !== n.substring(9, 10);
					o && t.doneFunction(!1), t.closeOnCancel && sweetAlert.close()
				};
			o["default"] = {
				handleButton: s,
				handleConfirm: l,
				handleCancel: i
			}, n.exports = o["default"]
		}, {
			"./handle-dom": 4,
			"./handle-swal-dom": 6,
			"./utils": 9
		}],
		4: [function(n, o, a) {
			Object.defineProperty(a, "__esModule", {
				value: !0
			});
			var r = function(e, t) {
					return new RegExp(" " + t + " ").test(" " + e.className + " ")
				},
				s = function(e, t) {
					r(e, t) || (e.className += " " + t)
				},
				l = function(e, t) {
					var n = " " + e.className.replace(/[\t\r\n]/g, " ") + " ";
					if (r(e, t)) {
						for (; n.indexOf(" " + t + " ") >= 0;) n = n.replace(" " + t + " ", " ");
						e.className = n.replace(/^\s+|\s+$/g, "")
					}
				},
				i = function(e) {
					var n = t.createElement("div");
					return n.appendChild(t.createTextNode(e)), n.innerHTML
				},
				u = function(e) {
					e.style.opacity = "", e.style.display = "block"
				},
				c = function(e) {
					if (e && !e.length) return u(e);
					for (var t = 0; t < e.length; ++t) u(e[t])
				},
				d = function(e) {
					e.style.opacity = "", e.style.display = "none"
				},
				f = function(e) {
					if (e && !e.length) return d(e);
					for (var t = 0; t < e.length; ++t) d(e[t])
				},
				p = function(e, t) {
					for (var n = t.parentNode; null !== n;) {
						if (n === e) return !0;
						n = n.parentNode
					}
					return !1
				},
				m = function(e) {
					e.style.left = "-9999px", e.style.display = "block";
					var t, n = e.clientHeight;
					return t = "undefined" != typeof getComputedStyle ? parseInt(getComputedStyle(e).getPropertyValue("padding-top"), 10) : parseInt(e.currentStyle.padding), e.style.left = "", e.style.display = "none", "-" + parseInt((n + t) / 2) + "px"
				},
				v = function(e, t) {
					if (+e.style.opacity < 1) {
						t = t || 16, e.style.opacity = 0, e.style.display = "block";
						var n = +new Date,
							o = function(e) {
								function t() {
									return e.apply(this, arguments)
								}
								return t.toString = function() {
									return e.toString()
								}, t
							}(function() {
								e.style.opacity = +e.style.opacity + (new Date - n) / 100, n = +new Date, +e.style.opacity < 1 && setTimeout(o, t)
							});
						o()
					}
					e.style.display = "block"
				},
				y = function(e, t) {
					t = t || 16, e.style.opacity = 1;
					var n = +new Date,
						o = function(e) {
							function t() {
								return e.apply(this, arguments)
							}
							return t.toString = function() {
								return e.toString()
							}, t
						}(function() {
							e.style.opacity = +e.style.opacity - (new Date - n) / 100, n = +new Date, +e.style.opacity > 0 ? setTimeout(o, t) : e.style.display = "none"
						});
					o()
				},
				h = function(n) {
					if ("function" == typeof MouseEvent) {
						var o = new MouseEvent("click", {
							view: e,
							bubbles: !1,
							cancelable: !0
						});
						n.dispatchEvent(o)
					} else if (t.createEvent) {
						var a = t.createEvent("MouseEvents");
						a.initEvent("click", !1, !1), n.dispatchEvent(a)
					} else t.createEventObject ? n.fireEvent("onclick") : "function" == typeof n.onclick && n.onclick()
				},
				b = function(t) {
					"function" == typeof t.stopPropagation ? (t.stopPropagation(), t.preventDefault()) : e.event && e.event.hasOwnProperty("cancelBubble") && (e.event.cancelBubble = !0)
				};
			a.hasClass = r, a.addClass = s, a.removeClass = l, a.escapeHtml = i, a._show = u, a.show = c, a._hide = d, a.hide = f, a.isDescendant = p, a.getTopMargin = m, a.fadeIn = v, a.fadeOut = y, a.fireClick = h, a.stopEventPropagation = b
		}, {}],
		5: [function(t, o, a) {
			Object.defineProperty(a, "__esModule", {
				value: !0
			});
			var r = t("./handle-dom"),
				s = t("./handle-swal-dom"),
				l = function(t, o, a) {
					var l = t || e.event,
						i = l.keyCode || l.which,
						u = a.querySelector("button.confirm"),
						c = a.querySelector("button.cancel"),
						d = a.querySelectorAll("button[tabindex]");
					if (-1 !== [9, 13, 32, 27].indexOf(i)) {
						for (var f = l.target || l.srcElement, p = -1, m = 0; m < d.length; m++) if (f === d[m]) {
							p = m;
							break
						}
						9 === i ? (f = -1 === p ? u : p === d.length - 1 ? d[0] : d[p + 1], r.stopEventPropagation(l), f.focus(), o.confirmButtonColor && s.setFocusStyle(f, o.confirmButtonColor)) : 13 === i ? ("INPUT" === f.tagName && (f = u, u.focus()), f = -1 === p ? u : n) : 27 === i && o.allowEscapeKey === !0 ? (f = c, r.fireClick(f, l)) : f = n
					}
				};
			a["default"] = l, o.exports = a["default"]
		}, {
			"./handle-dom": 4,
			"./handle-swal-dom": 6
		}],
		6: [function(n, o, a) {
			var r = function(e) {
					return e && e.__esModule ? e : {
						"default": e
					}
				};
			Object.defineProperty(a, "__esModule", {
				value: !0
			});
			var s = n("./utils"),
				l = n("./handle-dom"),
				i = n("./default-params"),
				u = r(i),
				c = n("./injected-html"),
				d = r(c),
				f = ".sweet-alert",
				p = ".sweet-overlay",
				m = function() {
					var e = t.createElement("div");
					for (e.innerHTML = d["default"]; e.firstChild;) t.body.appendChild(e.firstChild)
				},
				v = function(e) {
					function t() {
						return e.apply(this, arguments)
					}
					return t.toString = function() {
						return e.toString()
					}, t
				}(function() {
					var e = t.querySelector(f);
					return e || (m(), e = v()), e
				}),
				y = function() {
					var e = v();
					return e ? e.querySelector("input") : void 0
				},
				h = function() {
					return t.querySelector(p)
				},
				b = function(e, t) {
					var n = s.hexToRgb(t);
					e.style.boxShadow = "0 0 2px rgba(" + n + ", 0.8), inset 0 0 0 1px rgba(0, 0, 0, 0.05)"
				},
				g = function(n) {
					var o = v();
					l.fadeIn(h(), 10), l.show(o), l.addClass(o, "showSweetAlert"), l.removeClass(o, "hideSweetAlert"), e.previousActiveElement = t.activeElement;
					var a = o.querySelector("button.confirm");
					a.focus(), setTimeout(function() {
						l.addClass(o, "visible")
					}, 500);
					var r = o.getAttribute("data-timer");
					if ("null" !== r && "" !== r) {
						var s = n;
						o.timeout = setTimeout(function() {
							var e = (s || null) && "true" === o.getAttribute("data-has-done-function");
							e ? s(null) : sweetAlert.close()
						}, r)
					}
				},
				w = function() {
					var e = v(),
						t = y();
					l.removeClass(e, "show-input"), t.value = u["default"].inputValue, t.setAttribute("type", u["default"].inputType), t.setAttribute("placeholder", u["default"].inputPlaceholder), C()
				},
				C = function(e) {
					if (e && 13 === e.keyCode) return !1;
					var t = v(),
						n = t.querySelector(".sa-input-error");
					l.removeClass(n, "show");
					var o = t.querySelector(".sa-error-container");
					l.removeClass(o, "show")
				},
				S = function() {
					var e = v();
					e.style.marginTop = l.getTopMargin(v())
				};
			a.sweetAlertInitialize = m, a.getModal = v, a.getOverlay = h, a.getInput = y, a.setFocusStyle = b, a.openModal = g, a.resetInput = w, a.resetInputError = C, a.fixVerticalPosition = S
		}, {
			"./default-params": 2,
			"./handle-dom": 4,
			"./injected-html": 7,
			"./utils": 9
		}],
		7: [function(e, t, n) {
			Object.defineProperty(n, "__esModule", {
				value: !0
			});
			var o = '<div class="sweet-overlay" tabIndex="-1"></div><div class="sweet-alert"><div class="sa-icon sa-error">\n      <span class="sa-x-mark">\n        <span class="sa-line sa-left"></span>\n        <span class="sa-line sa-right"></span>\n      </span>\n    </div><div class="sa-icon sa-warning">\n      <span class="sa-body"></span>\n      <span class="sa-dot"></span>\n    </div><div class="sa-icon sa-info"></div><div class="sa-icon sa-success">\n      <span class="sa-line sa-tip"></span>\n      <span class="sa-line sa-long"></span>\n\n      <div class="sa-placeholder"></div>\n      <div class="sa-fix"></div>\n    </div><div class="sa-icon sa-custom"></div><h2>Title</h2>\n    <p>Text</p>\n    <fieldset>\n      <input type="text" tabIndex="3" />\n      <div class="sa-input-error"></div>\n    </fieldset><div class="sa-error-container">\n      <div class="icon">!</div>\n      <p>Not valid!</p>\n    </div><div class="sa-button-container">\n      <button class="cancel" tabIndex="2">Cancel</button>\n      <div class="sa-confirm-button-container">\n        <button class="confirm" tabIndex="1">OK</button><div class="la-ball-fall">\n          <div></div>\n          <div></div>\n          <div></div>\n        </div>\n      </div>\n    </div></div>';
			n["default"] = o, t.exports = n["default"]
		}, {}],
		8: [function(e, t, o) {
			Object.defineProperty(o, "__esModule", {
				value: !0
			});
			var a = e("./utils"),
				r = e("./handle-swal-dom"),
				s = e("./handle-dom"),
				l = ["error", "warning", "info", "success", "input", "prompt"],
				i = function(e) {
					var t = r.getModal(),
						o = t.querySelector("h2"),
						i = t.querySelector("p"),
						u = t.querySelector("button.cancel"),
						c = t.querySelector("button.confirm");
					if (o.innerHTML = e.html ? e.title : s.escapeHtml(e.title).split("\n").join("<br>"), i.innerHTML = e.html ? e.text : s.escapeHtml(e.text || "").split("\n").join("<br>"), e.text && s.show(i), e.customClass) s.addClass(t, e.customClass), t.setAttribute("data-custom-class", e.customClass);
					else {
						var d = t.getAttribute("data-custom-class");
						s.removeClass(t, d), t.setAttribute("data-custom-class", "")
					}
					if (s.hide(t.querySelectorAll(".sa-icon")), e.type && !a.isIE8()) {
						var f = function() {
								for (var o = !1, a = 0; a < l.length; a++) if (e.type === l[a]) {
									o = !0;
									break
								}
								if (!o) return logStr("Unknown alert type: " + e.type), {
									v: !1
								};
								var i = ["success", "error", "warning", "info"],
									u = n; - 1 !== i.indexOf(e.type) && (u = t.querySelector(".sa-icon.sa-" + e.type), s.show(u));
								var c = r.getInput();
								switch (e.type) {
								case "success":
									s.addClass(u, "animate"), s.addClass(u.querySelector(".sa-tip"), "animateSuccessTip"), s.addClass(u.querySelector(".sa-long"), "animateSuccessLong");
									break;
								case "error":
									s.addClass(u, "animateErrorIcon"), s.addClass(u.querySelector(".sa-x-mark"), "animateXMark");
									break;
								case "warning":
									s.addClass(u, "pulseWarning"), s.addClass(u.querySelector(".sa-body"), "pulseWarningIns"), s.addClass(u.querySelector(".sa-dot"), "pulseWarningIns");
									break;
								case "input":
								case "prompt":
									c.setAttribute("type", e.inputType), c.value = e.inputValue, c.setAttribute("placeholder", e.inputPlaceholder), s.addClass(t, "show-input"), setTimeout(function() {
										c.focus(), c.addEventListener("keyup", swal.resetInputError)
									}, 400)
								}
							}();
						if ("object" == typeof f) return f.v
					}
					if (e.imageUrl) {
						var p = t.querySelector(".sa-icon.sa-custom");
						p.style.backgroundImage = "url(" + e.imageUrl + ")", s.show(p);
						var m = 80,
							v = 80;
						if (e.imageSize) {
							var y = e.imageSize.toString().split("x"),
								h = y[0],
								b = y[1];
							h && b ? (m = h, v = b) : logStr("Parameter imageSize expects value with format WIDTHxHEIGHT, got " + e.imageSize)
						}
						p.setAttribute("style", p.getAttribute("style") + "width:" + m + "px; height:" + v + "px")
					}
					t.setAttribute("data-has-cancel-button", e.showCancelButton), e.showCancelButton ? u.style.display = "inline-block" : s.hide(u), t.setAttribute("data-has-confirm-button", e.showConfirmButton), e.showConfirmButton ? c.style.display = "inline-block" : s.hide(c), e.cancelButtonText && (u.innerHTML = s.escapeHtml(e.cancelButtonText)), e.confirmButtonText && (c.innerHTML = s.escapeHtml(e.confirmButtonText)), e.confirmButtonColor && (c.style.backgroundColor = e.confirmButtonColor, c.style.borderLeftColor = e.confirmLoadingButtonColor, c.style.borderRightColor = e.confirmLoadingButtonColor, r.setFocusStyle(c, e.confirmButtonColor)), t.setAttribute("data-allow-outside-click", e.allowOutsideClick);
					var g = e.doneFunction ? !0 : !1;
					t.setAttribute("data-has-done-function", g), e.animation ? "string" == typeof e.animation ? t.setAttribute("data-animation", e.animation) : t.setAttribute("data-animation", "pop") : t.setAttribute("data-animation", "none"), t.setAttribute("data-timer", e.timer)
				};
			o["default"] = i, t.exports = o["default"]
		}, {
			"./handle-dom": 4,
			"./handle-swal-dom": 6,
			"./utils": 9
		}],
		9: [function(t, n, o) {
			Object.defineProperty(o, "__esModule", {
				value: !0
			});
			var a = function(e, t) {
					for (var n in t) t.hasOwnProperty(n) && (e[n] = t[n]);
					return e
				},
				r = function(e) {
					var t = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(e);
					return t ? parseInt(t[1], 16) + ", " + parseInt(t[2], 16) + ", " + parseInt(t[3], 16) : null
				},
				s = function() {
					return e.attachEvent && !e.addEventListener
				},
				l = function(t) {
					e.console && e.console.log("SweetAlert: " + t)
				},
				i = function(e, t) {
					e = String(e).replace(/[^0-9a-f]/gi, ""), e.length < 6 && (e = e[0] + e[0] + e[1] + e[1] + e[2] + e[2]), t = t || 0;
					var n, o, a = "#";
					for (o = 0; 3 > o; o++) n = parseInt(e.substr(2 * o, 2), 16), n = Math.round(Math.min(Math.max(0, n + n * t), 255)).toString(16), a += ("00" + n).substr(n.length);
					return a
				};
			o.extend = a, o.hexToRgb = r, o.isIE8 = s, o.logStr = l, o.colorLuminance = i
		}, {}]
	}, {}, [1]), "function" == typeof define && define.amd ? define(function() {
		return sweetAlert
	}) : "undefined" != typeof module && module.exports && (module.exports = sweetAlert)
}(window, document);



function mji()
{
	swal({
			        title: "附件需要付费",
			        text: "你需要花费 金币购买附件",
			        type: "warning",
			        showCancelButton: true,
			         confirmButtonColor: "#DD6B55",
			         confirmButtonText: "购买",
			         cancelButtonText:'取消',
			         closeOnConfirm: false,
			     }, function(){
			         alert(111);
			    });
}


function mjii()
{
swal({
        title: (state==1)?"你要解锁主题?":'你要锁定主题?',
        text: (state==1)?"解锁后帖子可回复":"锁定后他人无法回复该帖子，但你自己可以回复！",
        type: (state==1)?"success":"warning",
        showCancelButton: true,
         confirmButtonColor: "#DD6B55",
         confirmButtonText: (state==1)?"解锁":'锁定',
         cancelButtonText:'取消',
         closeOnConfirm: false,
     }, function(){
        $.ajax({
			url: www+'thread'+exp+'set_state',
			type:"POST",
			cache: false,
			data:{
				id:id,
				state:state,
			},
			dataType: 'json'
		}).then(function(e) {
			if(e.error)
				return window.location.reload();
			
			swal("失败", e.info, "error");
			            	
		}, function() {
			swal("失败", "请尝试重新提交", "error");
		});
    });
	
	}
</script>

     <span style="padding:0" onclick='swal("失败", "请尝试重新提交", "success");'> >xxxx</span>
     <span style="padding:0" onclick=' mji()	'> >11111</span>
     <span style="padding:0" onclick=' mjii()	'> >222222</span>

	 
	 
	 