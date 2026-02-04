<?php if ($galeria && is_array($galeria)): ?>

<style type="text/css">
  /*------------------------------------*\
    MATERIAL PHOTO GALLERY - Slider Mejorado
  ----------------------------------*/

  .m-p-g {
    max-width: 100%;
    margin: 0 auto;
  }

  .m-p-g__thumbs-img {
    width: 100%;
    margin: 0.5rem;
    float: left;
    cursor: pointer;
    position: relative;
    opacity: 1;
    filter: brightness(100%);
    border-radius: 6px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.15);
    transition: transform 0.3s ease, filter 0.3s ease;
  }

  .m-p-g__thumbs-img:hover {
    filter: brightness(110%);
    transform: scale(1.05);
  }

  .m-p-g__fullscreen {
    position: fixed;
    z-index: 10;
    top: 0; left: 0; right: 0; bottom: 0;
    width: 100%; height: 100vh;
    background: rgba(0,0,0,0.9);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s ease;
  }

  .m-p-g__fullscreen.active {
    opacity: 1;
    visibility: visible;
  }

  .m-p-g__fullscreen-img {
    max-width: 90%;
    max-height: 90%;
    border-radius: 8px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.5);
    transition: opacity 0.4s ease, transform 0.4s ease;
    opacity: 0;
    visibility: hidden;
  }

  .m-p-g__fullscreen-img.active {
    opacity: 1;
    visibility: visible;
  }

  /* Controles */
  .m-p-g__controls-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 48px;
    color: white;
    background: none;
    border: none;
    cursor: pointer;
    opacity: 0.7;
    transition: opacity 0.3s;
    z-index: 20;
  }
  .m-p-g__controls-arrow:hover { opacity: 1; }
  .m-p-g__controls-arrow--prev { left: 20px; }
  .m-p-g__controls-arrow--next { right: 20px; }

  .m-p-g__controls-close {
    position: absolute;
    top: 20px;
    right: 30px;
    font-size: 36px;
    color: white;
    background: none;
    border: none;
    cursor: pointer;
    z-index: 30;
  }

  /* Masonry estilo Pinterest */
  .gallery {
    column-count: 3;
    column-gap: 16px;
  }

  .gallery-item {
    width: 100%;
    margin-bottom: 16px;
    display: block;
    border-radius: 8px;
    cursor: pointer;
    object-fit: cover;
    transition: transform 0.3s ease;
  }

  .gallery-item:hover {
    transform: translateY(-4px);
  }

  /* Responsive Masonry */
  @media (max-width: 1024px) {
    .gallery { column-count: 2; }
  }

  @media (max-width: 640px) {
    .gallery { column-count: 1; }
    .m-p-g__thumbs-img { width: 100%; }
  }
</style>

<div class="gallery-image-products">
  <h2 class="f-dulcing color-primary">Galería</h2>
  <div class="gallery">
    <div class="m-p-g">
      <div class="m-p-g__thumbs" data-google-image-layout data-max-height="350">
        <?php foreach ($galeria as $src): ?>
          <img src="<?= htmlspecialchars($src['url']) ?>"
            alt="<?= !empty($src['alt']) ? htmlspecialchars($src['alt']) : htmlspecialchars($src['title']) ?>"
            class="m-p-g__thumbs-img"
            data-full="<?= htmlspecialchars($src['url']) ?>">
        <?php endforeach; ?>
      </div>
      <div class="m-p-g__fullscreen">
        <button class="m-p-g__controls-arrow m-p-g__controls-arrow--prev">&#10094;</button>
        <button class="m-p-g__controls-arrow m-p-g__controls-arrow--next">&#10095;</button>
        <button class="m-p-g__controls-close">&times;</button>
      </div>
    </div>
  </div>
</div>

<script>
(function() {
  function MaterialPhotoGallery(elem) {
    this.elem = elem;
    this.thumbs = elem.querySelectorAll('.m-p-g__thumbs-img');
    this.fullscreen = elem.querySelector('.m-p-g__fullscreen');
    this.activeImg = null;
    this.currentIndex = 0;
    this.init();
  }

  MaterialPhotoGallery.prototype.init = function() {
    var self = this;
    this.thumbs.forEach(function(img, index) {
      img.addEventListener('click', function() {
        self.open(index);
      });
    });

    this.fullscreen.querySelector('.m-p-g__controls-close')
      .addEventListener('click', function() { self.close(); });

    this.fullscreen.querySelector('.m-p-g__controls-arrow--prev')
      .addEventListener('click', function(e) { e.stopPropagation(); self.prev(); });

    this.fullscreen.querySelector('.m-p-g__controls-arrow--next')
      .addEventListener('click', function(e) { e.stopPropagation(); self.next(); });

    // soporte teclado
    document.addEventListener('keydown', function(e) {
      if (!self.fullscreen.classList.contains('active')) return;
      if (e.key === 'ArrowLeft') self.prev();
      if (e.key === 'ArrowRight') self.next();
      if (e.key === 'Escape') self.close();
    });
  };

  MaterialPhotoGallery.prototype.open = function(index) {
    this.currentIndex = index;
    var fullSrc = this.thumbs[index].getAttribute('data-full') || this.thumbs[index].src;
    if (!this.activeImg) {
      this.activeImg = document.createElement('img');
      this.activeImg.className = 'm-p-g__fullscreen-img';
      this.fullscreen.appendChild(this.activeImg);
    }
    this.activeImg.src = fullSrc;
    this.fullscreen.classList.add('active');
    this.activeImg.classList.add('active');
  };

  MaterialPhotoGallery.prototype.close = function() {
    if (this.activeImg) {
      this.fullscreen.classList.remove('active');
      this.activeImg.classList.remove('active');
      this.activeImg.src = '';
    }
  };

  MaterialPhotoGallery.prototype.prev = function() {
    this.currentIndex = (this.currentIndex - 1 + this.thumbs.length) % this.thumbs.length;
    this.open(this.currentIndex);
  };

  MaterialPhotoGallery.prototype.next = function() {
    this.currentIndex = (this.currentIndex + 1) % this.thumbs.length;
    this.open(this.currentIndex);
  };

  window.MaterialPhotoGallery = MaterialPhotoGallery;
})();

document.addEventListener('DOMContentLoaded', function() {
  var elem = document.querySelector('.m-p-g');
  if (elem) {
    new MaterialPhotoGallery(elem);
  }
});
</script>

<?php endif; ?>
