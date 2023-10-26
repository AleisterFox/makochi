const container = document.getElementById('container');
const ctx = container.getContext('2d');
container.width = container.clientWidth;
container.height = window.innerHeight * 0.83;
const svgs = document.querySelectorAll("svg");

let particlesArray = [];
let imgsArrays = ['img/1.png','img/2.png','img/3.png','img/4.png','img/5.png'];

//Mouse position

let mouse = container.width < 769 ? {
    x: null,
    y: null,
    radius: (container.height/80) * (container.width/80)
}: {
    x: null,
    y: null,
    radius: (container.height/120) * (container.width/120)
};


window.addEventListener('mousemove', function (event) {
    const rect = container.getBoundingClientRect();
    mouse.x = event.clientX - rect.left;
    mouse.y = event.clientY - rect.top;
});

function randInt() {
    let randomNumber = Math.floor(Math.random() * 5);
    return (randomNumber);
}

class Particle {

    constructor(x, y, directionX, directionY, size) {
        let a1 = randInt();
        this.imgElement = document.createElement('img');
        this.imgElement.src = imgsArrays[a1];
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
        ctx.drawImage(this.imgElement, this.x, this.y, this.size, this.size);
    }

    update() {
        // check if particle is still within canvas
        if (this.x > container.width || this.x < 0) {
            this.directionX = -this.directionX;
        }

        if (this.y > container.height || this.y < 0) {
            this.directionY = - this.directionY;
        }

        // Check Collision Detection - Mouse Position / Particle Position
        let dx = mouse.x - this.x;
        let dy = mouse.y - this.y;
        let distance = Math.sqrt((dx ** 2) + (dy ** 2));
        if (distance < mouse.radius + this.size) {
            if (mouse.x < this.x && this.x < container.width - this.size * 20) {
                this.x += 20;
            }

            if (mouse.x > this.x && this.x > this.size * 20) {
                this.x -= 20;
            }

            if (mouse.y < this.y && this.y < container.height - this.size * 20) {
                this.y += 20;
            }

            if (mouse.y > this.y && this.y > this.size * 20) {
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
    let numberOfParticles = (container.height * container.width) / 30000;
    for (let i = 0; i < numberOfParticles; i++) {
        let size = (Math.random() * 20) + 1;
        let x = (Math.random() * ((window.innerWidth - size * 5) - (size * 5)) + size * 5);
        let y = (Math.random() * ((window.innerHeight - size * 5) - (size * 5)) + size * 5);
        let directionX = (Math.random() * 2) - 1;
        let directionY = (Math.random() * 2) - 1;

        particlesArray.push(new Particle(x, y, directionX, directionY, size));
    }
}

function animate() {
    requestAnimationFrame(animate);
    ctx.clearRect(0, 0, innerWidth, innerHeight);

    for (let i = 0; i < particlesArray.length; i++) {
        particlesArray[i].update();
    }
}

init();

animate();