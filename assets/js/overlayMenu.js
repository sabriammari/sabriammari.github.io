const menuButton = $('.menu');
const offcanvas = $('#offcanvasScrolling');

offcanvas.on('hidden.bs.offcanvas', function() {
  menuButton.removeClass('opened').addClass('closed');
});

offcanvas.on('shown.bs.offcanvas', function() {
  menuButton.removeClass('closed').addClass('opened');
});

function closeOffcanvas() {
    offcanvas.offcanvas('hide');
    menuButton.removeClass('opened').addClass('closed');
}

function openOffcanvas() {
  setTimeout(function() {
    offcanvas.offcanvas('show');
    menuButton.removeClass('closed').addClass('opened');
  }, 500);
}

$('.menu').on('click', function() {
  menuButton.toggleClass('opened closed');
});


$('.menuListItem').on('click', function() {
  closeOffcanvas();
});

// setTimeout(() => document.body.classList.add('render'), 60);
// const navdemos = Array.from(document.querySelectorAll('nav.demos > .demo'));
// const total = navdemos.length;
// const current = navdemos.findIndex(el => el.classList.contains('demo--current'));
// const navigate = (linkEl) => {
//   document.body.classList.remove('render');
//   document.body.addEventListener('transitionend', () => window.location = linkEl.href);
// };
// navdemos.forEach(link => link.addEventListener('click', (ev) => {
//   ev.preventDefault();
//   navigate(ev.target);
// }));
// document.addEventListener('keydown', (ev) => {
//   const keyCode = ev.keyCode || ev.which;
//   let linkEl;
//   if ( keyCode === 37 ) {
//     linkEl = current > 0 ? navdemos[current-1] : navdemos[total-1];
//   }
//   else if ( keyCode === 39 ) {
//     linkEl = current < total-1 ? navdemos[current+1] : navdemos[0];
//   }
//   else {
//     return false;
//   }
//   navigate(linkEl);
// });


const ease = {
  exponentialIn: (t) => {
    return t == 0.0 ? t : Math.pow(2.0, 10.0 * (t - 1.0));
  },
  exponentialOut: (t) => {
    return t == 1.0 ? t : 1.0 - Math.pow(2.0, -10.0 * t);
  },
  exponentialInOut: (t) => {
    return t == 0.0 || t == 1.0
      ? t
      : t < 0.5
        ? +0.5 * Math.pow(2.0, (20.0 * t) - 10.0)
        : -0.5 * Math.pow(2.0, 10.0 - (t * 20.0)) + 1.0;
  },
  sineOut: (t) => {
    const HALF_PI = 1.5707963267948966;
    return Math.sin(t * HALF_PI);
  },
  circularInOut: (t) => {
    return t < 0.5
        ? 0.5 * (1.0 - Math.sqrt(1.0 - 4.0 * t * t))
        : 0.5 * (Math.sqrt((3.0 - 2.0 * t) * (2.0 * t - 1.0)) + 1.0);
  },
  cubicIn: (t) => {
    return t * t * t;
  },
  cubicOut: (t) => {
    const f = t - 1.0;
    return f * f * f + 1.0;
  },
  cubicInOut: (t) => {
    return t < 0.5
      ? 4.0 * t * t * t
      : 0.5 * Math.pow(2.0 * t - 2.0, 3.0) + 1.0;
  },
  quadraticOut: (t) => {
    return -t * (t - 2.0);
  },
  quarticOut: (t) => {
    return Math.pow(t - 1.0, 3.0) * (1.0 - t) + 1.0;
  },
}


class ShapeOverlays {
  constructor(elm) {
    this.elm = elm;
    this.path = elm.querySelectorAll('path');
    this.numPoints = 100;
    this.duration = 1000;
    this.delayPointsArray = [];
    this.delayPointsMax = 200;
    this.delayPerPath = 150;
    this.timeStart = Date.now();
    this.isOpened = false;
    this.isAnimating = false;
  }
  toggle() {
    this.isAnimating = true;
    for (var i = 0; i < this.numPoints; i++) {
      this.delayPointsArray[i] = Math.random() * this.delayPointsMax;
    }
    if (this.isOpened === false) {
      this.open();
        openOffcanvas();
    } else {
        this.close();
      closeOffcanvas();
    }
  }
  open() {
    this.isOpened = true;
    this.elm.classList.add('is-opened');
    this.timeStart = Date.now();
    this.renderLoop();
  }
  close() {
    this.isOpened = false;
    this.elm.classList.remove('is-opened');
    this.timeStart = Date.now();
    this.renderLoop();
  }

  updatePath(time) {
    const points = [];
    for (var i = 0; i < this.numPoints; i++) {
      points[i] = (1 - ease.cubicInOut(Math.min(Math.max(time - this.delayPointsArray[i], 0) / this.duration, 1))) * 100
    }
  
    let str = '';
    str += (this.isOpened) ? `M 100 0 H ${100 - points[0]}` : `M 0 0 H ${points[0]}`;
    for (var i = 0; i < this.numPoints - 1; i++) {
      const p = (i + 1) / (this.numPoints - 1) * 100;
      const cp = p - (1 / (this.numPoints - 1) * 100) / 2;
      str += (this.isOpened) ?
        `C ${100 - points[i]} ${cp} ${100 - points[i + 1]} ${cp} ${100 - points[i + 1]} ${p} ` :
        `C ${points[i]} ${cp} ${points[i + 1]} ${cp} ${points[i + 1]} ${p} `;
    }
    str += (this.isOpened) ? `H 0 V 0` : `H 100 V 0`;
    return str;
  }
  reversePath(time) {
    const points = [];
    for (var i = 0; i < this.numPoints; i++) {
      points[i] = (1 - ease.cubicInOut(Math.min(Math.max(1 - (time - this.delayPointsArray[i]) / this.duration, 0), 1))) * 100;
    }
  
    let str = '';
    str += (this.isClosed) ? `M 0 0 H ${points[0]}` : `M 100 0 H ${100 - points[0]}`;
    for (var i = 0; i < this.numPoints - 1; i++) {
      const p = (i + 1) / (this.numPoints - 1) * 100;
      const cp = p - (1 / (this.numPoints - 1) * 100) / 2;
      str += (this.isClosed) ?
        `C ${points[i]} ${cp} ${points[i + 1]} ${cp} ${points[i + 1]} ${p} ` :
        `C ${100 - points[i]} ${cp} ${100 - points[i + 1]} ${cp} ${100 - points[i + 1]} ${p} `;
    }
    str += (this.isClosed) ? `H 100 V 0` : `H 0 V 0`;
    return str;
  }
  
  render() {
    if (this.isOpened) {
      for (var i = 0; i < this.path.length; i++) {
        this.path[i].setAttribute('d', this.updatePath(Date.now() - (this.timeStart + this.delayPerPath * i)));
      }
    } else {
    //   for (var i = 0; i < this.path.length; i++) {
    //     this.path[i].setAttribute('d', this.updatePath(Date.now() - (this.timeStart + this.delayPerPath * i)));
    //   }
    // for (var i = 0; i < this.path.length; i++) {
    //   this.path[i].setAttribute('d', this.updatePath(Date.now() - (this.timeStart + this.delayPerPath * (this.path.length - i - 1))));
    // }
      for (var i = 0; i < this.path.length; i++) {
        this.path[i].setAttribute('d', this.reversePath(Date.now() - (this.timeStart + this.delayPerPath * (this.path.length - i - 1))));
      }
    }
  }
  renderLoop() {
    this.render();
    if (Date.now() - this.timeStart < this.duration + this.delayPerPath * (this.path.length - 1) + this.delayPointsMax) {
      requestAnimationFrame(() => {
        this.renderLoop();
      });
    }
    else {
      this.isAnimating = false;
    }
  }

}



(function() {
  const elmMenu = document.querySelector('.menu');
  const elmOverlay = document.querySelector('.shape-overlays');
  const overlay = new ShapeOverlays(elmOverlay);


  elmMenu.addEventListener('click', () => {
    if (overlay.isAnimating) {
      return false;
    }
    overlay.toggle();
    if (overlay.isOpened === true) {
      elmMenu.classList.add('is-opened-navi');
      for (var i = 0; i < gNavItems.length; i++) {
        gNavItems[i].classList.add('is-opened');
      }
    } else {
      elmMenu.classList.remove('is-opened-navi');
      for (var i = 0; i < gNavItems.length; i++) {
        gNavItems[i].classList.remove('is-opened');
      }
    }
  });
}());
