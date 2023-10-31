const main = document.querySelector('main');
const contain = document.createElement('canvas');
const ctxx = contain.getContext('2d');
main.appendChild(contain);
contain.style.position = 'absolute';
contain.style.top = '0';
contain.width = main.clientWidth;
contain.height = main.clientHeight;

let particlesArrays = [];
let imgsArrayss = ['img/lapiz.png'];

//Mousee position

let mousee = main.width < 769 ? {
    x: null,
    y: null,
    radius: (main.height/80) * (main.width/80)
}: {
    x: null,
    y: null,
    radius: (main.height/120) * (main.width/120)
};


window.addEventListener('mouseemove', function (event) {
    const rect = main.getBoundingClientRect();
    mousee.x = event.clientX - rect.left;
    mousee.y = event.clientY - rect.top;
});

function randInt() {
    let randomNumber = Math.floor(Math.random() * 5);
    return (randomNumber);
}

class Trazos {

    constructor(x, y, directionX, directionY, size) {
        let a1 = randInt();
        this.imgElement = document.createElement('img');
        this.imgElement.src = imgsArrayss[a1];
        this.x = x;
        this.y = y;
        this.directionX = directionX
        this.directionY = directionY;
        this.size = 0;
        if (a1 === 2) {
            this.size = 10;
        } else {
            this.size = 50;
        }

        this.dsize = size;
    }

    draw() {
        ctxx.drawImage(this.imgElement, this.x, this.y, this.size, this.size);
    }

    update() {
        // check if particle is still within canvas
        if (this.x > contain.width || this.x < 0) {
            this.directionX = -this.directionX;
        }

        if (this.y > contain.height || this.y < 0) {
            this.directionY = - this.directionY;
        }

        // Check Collision Detection - Mousee Position / Particle Position
        let dx = mousee.x - this.x;
        let dy = mousee.y - this.y;
        let distance = Math.sqrt((dx ** 2) + (dy ** 2));
        if (distance < mousee.radius + this.size) {
            if (mousee.x < this.x && this.x < contain.width - this.size * 20) {
                this.x += 20;
            }

            if (mousee.x > this.x && this.x > this.size * 20) {
                this.x -= 20;
            }

            if (mousee.y < this.y && this.y < contain.height - this.size * 20) {
                this.y += 20;
            }

            if (mousee.y > this.y && this.y > this.size * 20) {
                this.y -= 20;
            }
        }
        // Move Particle
        this.x += this.directionX;
        this.y += this.directionY;

        // Draw Particle
        this.draw();
    }

}

// Initiate particles

function init() {
    let numberOfParticles = (contain.height * contain.width) / 30000;
    for (let i = 0; i < numberOfParticles; i++) {
        let size = (Math.random() * 20) + 1;
        let x = (Math.random() * ((window.innerWidth - size * 5) - (size * 5)) + size * 5);
        let y = (Math.random() * ((window.innerHeight - size * 5) - (size * 5)) + size * 5);
        let directionX = (Math.random() * 2) - 1;
        let directionY = (Math.random() * 2) - 1;

        particlesArrays.push(new Particle(x, y, directionX, directionY, size));
    }
}

function animate() {
    requestAnimationFrame(animate);
    ctxx.clearRect(0, 0, innerWidth, innerHeight);

    for (let i = 0; i < particlesArrays.length; i++) {
        particlesArrays[i].update();
    }
}

init();

animate();