<?php 
require 'Config/database.php';

?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
    <title>responsive Multipage Blog Website</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
  
<style>
html {
  font-size: 16px;
}

html, body {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #0f1629;
  font-family: "helvetica neue", helvetica, sans-serif;
  overflow: hidden;
}

a {
  color: #fff;
  text-decoration: none;
}

.scroll {
  position: absolute;
  bottom: 2rem;
  left: 50%;
  transform: translateX(-50%);
  color: rgba(255, 255, 255, 0.5);
  font-family: "font-2";
  font-size: calc(0.5rem + 0.35vw);
  z-index: 10;
}

.logo {
  position: absolute;
  top: 2rem;
  left: 50%;
  transform: translateX(-50%);
  padding: 0;
  margin: 0;
  z-index: 10;
}
.logo img {
  display: block;
  height: 1rem;
  width: auto;
}

ul, li {
  list-style: none;
  padding: 0;
  margin: 0;
}

.nav {
  position: absolute;
  top: 2rem;
  z-index: 10;
}
.nav--left {
  left: 1rem;
}
.nav--right {
  right: 1rem;
}
.nav ul {
  display: flex;
  align-items: center;
  height: 1rem;
}
.nav li {
  display: block;
  margin: 0 1rem;
  padding: 0;
}
.nav a {
  position: relative;
  display: flex;
  align-items: center;
  font-size: calc(0.5rem + 0.35vw);
  font-family: "helvetica neue", helvetica, sans-serif;
}
.nav a span {
  position: relative;
}
.nav a span:before {
  content: "";
  position: absolute;
  left: 0;
  bottom: -0.35rem;
  width: 100%;
  height: 1px;
  background-color: rgba(255, 255, 255, 0.25);
  transition: transform 0.75s ease;
  transform-origin: right;
  transform: scaleX(0);
}
.nav a:hover span:before, .nav a.is-active span:before {
  transform: scaleX(1);
  transform-origin: left;
}

.vert-text {
  position: absolute;
  bottom: 2rem;
  right: 2rem;
  width: 15rem;
  display: flex;
  align-items: center;
  z-index: 10;
}
.vert-text span {
  display: block;
  color: #fff;
  text-transform: uppercase;
  line-height: 1.1;
  transform: rotate(-90deg) translateY(15rem);
  transform-origin: bottom left;
  font-size: 1.35rem;
}

.cart-total {
  display: block;
  height: 2rem;
  width: 2rem;
  background-color: rgba(255, 255, 255, 0.25);
  border-radius: 50%;
  text-align: center;
  line-height: 2rem;
  margin-left: 1rem;
}

.slider {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
}
.slider__text {
  position: absolute;
  bottom: calc(2rem + 3vw);
  left: calc(1rem + 3vw);
  z-index: 10;
  font-size: calc(1rem + 3vw);
  text-transform: uppercase;
  transform-origin: top;
  line-height: 1.2;
  color: #fff;
  font-weight: 500;
}
.slider__text-line {
  overflow: hidden;
}
.slider__inner {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
}
.slider__nav {
  position: absolute;
  top: 50%;
  right: 0;
  transform: translateY(-50%);
  z-index: 10;
}
.slider-bullet {
  display: flex;
  align-items: center;
  padding: 1rem 0;
}
.slider-bullet__text {
  color: #fff;
  font-size: 0.65rem;
  margin-right: 1rem;
}
.slider-bullet__line {
  background-color: #fff;
  height: 1px;
  width: 1rem;
}
.slider canvas {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
}

.slide {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  overflow: hidden;
}
.slide__content {
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
}
.slide__img {
  position: relative;
  width: 25vw;
  height: 70vh;
  padding: 0;
  margin: 0;
  min-width: 12.5rem;
  transform-origin: top;
}
.slide__img:first-child {
  top: -1.5rem;
}
.slide__img:last-child {
  bottom: -1.5rem;
}
.slide__img img {
  display: block;
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
}
@media (max-width: 1200px) {
  .slide__img {
  position: relative;
  width: 260px;
  height:340px;
  padding: 0;
  margin: 0;
  min-width: 12.5rem;
  transform-origin: top;
}
}
@media (max-width: 800px) {
  .slide__img {
  position: relative;
  width: 200px;
  height:280px;
  padding: 0;
  margin: 0;
  min-width: 12.5rem;
  transform-origin: top;
}
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
</head>

<body translate="no">
  <nav class="nav nav--left js-nav">
  <ul>
    <li>
    <a href="<?= ROOT_URL?>home.php"><span>Explore</span></a></li>    </li>
    
  </ul>
</nav>

<div class="slider js-slider">
  <div class="slider__inner js-slider__inner"></div>
  
  <div class="slide js-slide">
    <div class="slide__content">
      <figure class="slide__img js-slide__img">
        <img src="https://images.unsplash.com/photo-1530651788726-1dbf58eeef1f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=882&q=80">
      </figure>
       <figure class="slide__img js-slide__img">
        <img src="https://images.unsplash.com/photo-1559386484-97dfc0e15539?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1234&q=80">
      </figure>
    </div>
    
    <div class="slider__text js-slider__text">
      <div class="slider__text-line js-slider__text-line"><div>The best way</div></div>
      <div class="slider__text-line js-slider__text-line"><div>to predict</div></div>
      <div class="slider__text-line js-slider__text-line"><div>the future</div></div>
      <div class="slider__text-line js-slider__text-line"><div>is to create it.</div></div>
    </div>
    
  </div>
  
  <div class="slide js-slide">
    <div class="slide__content">
      <figure class="slide__img js-slide__img">
      <img src="https://images.unsplash.com/photo-1611739669334-f0667462651a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80">
      </figure>
       <figure class="slide__img js-slide__img">
       <img src="https://images.unsplash.com/photo-1518806118471-f28b20a1d79d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=464&q=80">
      </figure>
    </div>
    <div class="slider__text js-slider__text">
      <div class="slider__text-line js-slider__text-line"><div>make create </div></div>
      <div class="slider__text-line js-slider__text-line"><div>turn the</div></div>
      <div class="slider__text-line js-slider__text-line"><div>dreams</div></div>
      <div class="slider__text-line js-slider__text-line"><div>into reality.</div></div>
    </div>
  </div>
  <nav class="slider__nav js-slider__nav">
    <div class="slider-bullet js-slider-bullet">
      <span class="slider-bullet__text js-slider-bullet__text">01</span>
      <span class="slider-bullet__line js-slider-bullet__line"></span>
    </div>
     <div class="slider-bullet js-slider-bullet">
      <span class="slider-bullet__text js-slider-bullet__text">02</span>
      <span class="slider-bullet__line js-slider-bullet__line"></span>
    </div>
    
  </nav>
  
  <div class="scroll js-scroll">Scroll</div>
  
</div>

    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/99/three.min.js'></script>
      <script id="rendered-js" >
class Slider {
  constructor() {
    this.bindAll();

    this.frag = `
    varying vec2 vUv;

    uniform sampler2D texture1;
    uniform sampler2D texture2;
    uniform sampler2D disp;

    uniform float dispPower;
    uniform float intensity;

    uniform vec2 size;
    uniform vec2 res;

    vec2 backgroundCoverUv( vec2 screenSize, vec2 imageSize, vec2 uv ) {
      float screenRatio = screenSize.x / screenSize.y;
      float imageRatio = imageSize.x / imageSize.y;
      vec2 newSize = screenRatio < imageRatio 
          ? vec2(imageSize.x * (screenSize.y / imageSize.y), screenSize.y)
          : vec2(screenSize.x, imageSize.y * (screenSize.x / imageSize.x));
      vec2 newOffset = (screenRatio < imageRatio 
          ? vec2((newSize.x - screenSize.x) / 2.0, 0.0) 
          : vec2(0.0, (newSize.y - screenSize.y) / 2.0)) / newSize;
      return uv * screenSize / newSize + newOffset;
    }

    void main() {
      vec2 uv = vUv;
      
      vec4 disp = texture2D(disp, uv);
      vec2 dispVec = vec2(disp.x, disp.y);
      
      vec2 distPos1 = uv + (dispVec * intensity * dispPower);
      vec2 distPos2 = uv + (dispVec * -(intensity * (1.0 - dispPower)));
      
      vec4 _texture1 = texture2D(texture1, distPos1);
      vec4 _texture2 = texture2D(texture2, distPos2);
      
      gl_FragColor = mix(_texture1, _texture2, dispPower);
    }
    `;

    this.el = document.querySelector('.js-slider');
    this.inner = this.el.querySelector('.js-slider__inner');
    this.slides = [...this.el.querySelectorAll('.js-slide')];
    this.bullets = [...this.el.querySelectorAll('.js-slider-bullet')];

    this.renderer = null;
    this.scene = null;
    this.clock = null;
    this.camera = null;

    this.images = [
    'https://s3-us-west-2.amazonaws.com/s.cdpn.io/58281/bg1.jpg',
    'https://s3-us-west-2.amazonaws.com/s.cdpn.io/58281/bg2.jpg',];


    this.data = {
      current: 0,
      next: 1,
      total: this.images.length - 1,
      delta: 0 };


    this.state = {
      animating: false,
      text: false,
      initial: true };


    this.textures = null;

    this.init();
  }

  bindAll() {
    ['render', 'nextSlide'].
    forEach(fn => this[fn] = this[fn].bind(this));
  }

  setStyles() {
    this.slides.forEach((slide, index) => {
      if (index === 0) return;

      TweenMax.set(slide, { autoAlpha: 0 });
    });

    this.bullets.forEach((bullet, index) => {
      if (index === 0) return;

      const txt = bullet.querySelector('.js-slider-bullet__text');
      const line = bullet.querySelector('.js-slider-bullet__line');

      TweenMax.set(txt, {
        alpha: 0.25 });

      TweenMax.set(line, {
        scaleX: 0,
        transformOrigin: 'left' });

    });
  }

  cameraSetup() {
    this.camera = new THREE.OrthographicCamera(
    this.el.offsetWidth / -2,
    this.el.offsetWidth / 2,
    this.el.offsetHeight / 2,
    this.el.offsetHeight / -2,
    1,
    1000);


    this.camera.lookAt(this.scene.position);
    this.camera.position.z = 1;
  }

  setup() {
    this.scene = new THREE.Scene();
    this.clock = new THREE.Clock(true);

    this.renderer = new THREE.WebGLRenderer({ alpha: true });
    this.renderer.setPixelRatio(window.devicePixelRatio);
    this.renderer.setSize(this.el.offsetWidth, this.el.offsetHeight);

    this.inner.appendChild(this.renderer.domElement);
  }

  loadTextures() {
    const loader = new THREE.TextureLoader();
    loader.crossOrigin = '';

    this.textures = [];
    this.images.forEach((image, index) => {
      const texture = loader.load(image + '?v=' + Date.now(), this.render);

      texture.minFilter = THREE.LinearFilter;
      texture.generateMipmaps = false;

      if (index === 0 && this.mat) {
        this.mat.uniforms.size.value = [
        texture.image.naturalWidth,
        texture.image.naturalHeight];

      }

      this.textures.push(texture);
    });

    this.disp = loader.load('https://s3-us-west-2.amazonaws.com/s.cdpn.io/58281/rock-_disp.png', this.render);
    this.disp.magFilter = this.disp.minFilter = THREE.LinearFilter;
    this.disp.wrapS = this.disp.wrapT = THREE.RepeatWrapping;
  }

  createMesh() {
    this.mat = new THREE.ShaderMaterial({
      uniforms: {
        dispPower: { type: 'f', value: 0.0 },
        intensity: { type: 'f', value: 0.5 },
        res: { value: new THREE.Vector2(window.innerWidth, window.innerHeight) },
        size: { value: new THREE.Vector2(1, 1) },
        texture1: { type: 't', value: this.textures[0] },
        texture2: { type: 't', value: this.textures[1] },
        disp: { type: 't', value: this.disp } },

      transparent: true,
      vertexShader: this.vert,
      fragmentShader: this.frag });


    const geometry = new THREE.PlaneBufferGeometry(
    this.el.offsetWidth,
    this.el.offsetHeight,
    1);


    const mesh = new THREE.Mesh(geometry, this.mat);

    this.scene.add(mesh);
  }

  transitionNext() {
    TweenMax.to(this.mat.uniforms.dispPower, 2.5, {
      value: 1,
      ease: Expo.easeInOut,
      onUpdate: this.render,
      onComplete: () => {
        this.mat.uniforms.dispPower.value = 0.0;
        this.changeTexture();
        this.render.bind(this);
        this.state.animating = false;
      } });


    const current = this.slides[this.data.current];
    const next = this.slides[this.data.next];

    const currentImages = current.querySelectorAll('.js-slide__img');
    const nextImages = next.querySelectorAll('.js-slide__img');

    const currentText = current.querySelectorAll('.js-slider__text-line div');
    const nextText = next.querySelectorAll('.js-slider__text-line div');

    const currentBullet = this.bullets[this.data.current];
    const nextBullet = this.bullets[this.data.next];

    const currentBulletTxt = currentBullet.querySelectorAll('.js-slider-bullet__text');
    const nextBulletTxt = nextBullet.querySelectorAll('.js-slider-bullet__text');

    const currentBulletLine = currentBullet.querySelectorAll('.js-slider-bullet__line');
    const nextBulletLine = nextBullet.querySelectorAll('.js-slider-bullet__line');

    const tl = new TimelineMax({ paused: true });

    if (this.state.initial) {
      TweenMax.to('.js-scroll', 1.5, {
        yPercent: 100,
        alpha: 0,
        ease: Power4.easeInOut });


      this.state.initial = false;
    }

    tl.
    staggerFromTo(currentImages, 1.5, {
      yPercent: 0,
      scale: 1 },
    {
      yPercent: -185,
      scaleY: 1.5,
      ease: Expo.easeInOut },
    0.075).
    to(currentBulletTxt, 1.5, {
      alpha: 0.25,
      ease: Linear.easeNone },
    0).
    set(currentBulletLine, {
      transformOrigin: 'right' },
    0).
    to(currentBulletLine, 1.5, {
      scaleX: 0,
      ease: Expo.easeInOut },
    0);

    if (currentText) {
      tl.
      fromTo(currentText, 2, {
        yPercent: 0 },
      {
        yPercent: -100,
        ease: Power4.easeInOut },
      0);
    }

    tl.
    set(current, {
      autoAlpha: 0 }).

    set(next, {
      autoAlpha: 1 },
    1);

    if (nextText) {
      tl.
      fromTo(nextText, 2, {
        yPercent: 100 },
      {
        yPercent: 0,
        ease: Power4.easeOut },
      1.5);
    }

    tl.
    staggerFromTo(nextImages, 1.5, {
      yPercent: 150,
      scaleY: 1.5 },
    {
      yPercent: 0,
      scaleY: 1,
      ease: Expo.easeInOut },
    0.075, 1).
    to(nextBulletTxt, 1.5, {
      alpha: 1,
      ease: Linear.easeNone },
    1).
    set(nextBulletLine, {
      transformOrigin: 'left' },
    1).
    to(nextBulletLine, 1.5, {
      scaleX: 1,
      ease: Expo.easeInOut },
    1);

    tl.play();
  }

  prevSlide() {

  }

  nextSlide() {
    if (this.state.animating) return;

    this.state.animating = true;

    this.transitionNext();

    this.data.current = this.data.current === this.data.total ? 0 : this.data.current + 1;
    this.data.next = this.data.current === this.data.total ? 0 : this.data.current + 1;
  }

  changeTexture() {
    this.mat.uniforms.texture1.value = this.textures[this.data.current];
    this.mat.uniforms.texture2.value = this.textures[this.data.next];
  }

  listeners() {
    window.addEventListener('wheel', this.nextSlide, { passive: true });
  }

  render() {
    this.renderer.render(this.scene, this.camera);
  }

  init() {
    this.setup();
    this.cameraSetup();
    this.loadTextures();
    this.createMesh();
    this.setStyles();
    this.render();
    this.listeners();
  }}

// Init classes
const slider = new Slider();
    </script>

  
</body>

</html>