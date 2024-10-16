const boxes = document.querySelectorAll('.slider-box');

var totalImages = 8; // change images values
var imgWidth = $(".slider-box .find-width").width();

const imageWidth = Math.round(imgWidth / totalImages); // Width of each image section in pixels
// console.log('imageWidth: ' + imageWidth);

function handleMouseMove(e) {
    const box = e.currentTarget;
    const boxRect = box.getBoundingClientRect();
    const xPos = e.clientX - boxRect.left;
    const boxWidth = boxRect.width;

    const imageIndex = Math.floor(xPos / imageWidth);

    const imagesInBox = box.querySelectorAll('.slider-images');
    console.log('imagesInBox' + imagesInBox);

    // Show the current image and hide others
    imagesInBox.forEach((image, index) => {
        // console.log('index' + index);
        if (index === imageIndex) {
            // image.style.display = 'block';
            image.classList.remove("d-none");

            // Before active remove color from botton bars
            const bars = box.querySelectorAll('.slider-bar');
            console.log('bars:' + bars);
            bars.forEach(bar => {
                bar.style.backgroundColor = null;
            });

            // Add active color on bottom bar
            const note = box.querySelector('.slider-bar-width-' + index);
            note.style.backgroundColor = 'black';

        } else {
            image.classList.add("d-none");
            // image.style.display = 'none';
        }
    });

    const positionPercentage = (xPos / boxWidth) * 100;
    const positionIndex = Math.floor(positionPercentage / 20);

    // const red = box.querySelector('.slider-bar');
    // red.style.backgroundColor = null;

    // const bars = box.querySelectorAll('.slider-bar');
    // console.log('bars:' + bars);
    // bars.forEach(bar => {
    //     bar.style.backgroundColor = null;
    // });

    // const note = box.querySelector('.slider-bar-width-' + positionIndex);
    // console.log('note:' + note);
    // if (note) {
    //     console.log('Position Index:', positionIndex);
    //     note.style.backgroundColor = 'black';
    // }

    // console.log('Position Index:', positionIndex);
}

function handleMouseLeave(e) {
    const box = e.currentTarget;
    const bars = box.querySelectorAll('.slider-bar');
    bars.forEach(bar => {
        bar.style.backgroundColor = null;
    });

    const imagesInBox = box.querySelectorAll('.slider-images');
    imagesInBox.forEach((image, index) => {
        if (index === 0) {
            image.classList.remove('d-none');
        } else {
            image.classList.add('d-none');
        }
    });
}

boxes.forEach(box => {
    box.addEventListener('mousemove', handleMouseMove);
    box.addEventListener('mouseleave', handleMouseLeave);
});
