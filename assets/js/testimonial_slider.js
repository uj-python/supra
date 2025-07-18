// <!-- Image opacity can be adjusted in const opacity = index === activeIndex ? 1 : 1; -->
const testimonials = [
  {
    "quote": "I attended class at Glisten over my summer break for Core Java, C and SQL. Vikas sir taught me a lot! To be honest, I was not as keen on doing coding initially but then after he taught me, my view on coding changed. He was able to keep me engaged throughout every class which made it much easier and more interesting to learn.",
    "name": "Rahul",
    "designation": "Developer",
    "src": "https://glisteneducation.com/wp-content/uploads/.../peter.jpg"
  },
  {
    "quote": "Thank you so much sir for guiding me in my course ASP.net. You are a great teacher and your way of teaching is very good. You guided me in every problem I faced. You are inspirational. Your guidance has made me complete the course successfully. I owe a debt of gratitude for all that you have done for me.",
    "name": "Koustav Roy",
    "designation": "Programmer",
    "src": "https://glisteneducation.com/wp-content/uploads/.../manuel.jpg"
  },
  {
    "quote": "I have joined in Glisten for the course core Java. All the basics were explained with programs, doubts were cleared then and there. Useful tips given throughout the course. Practical class were conducted. Real time examples were also explained. Thanks for Glisten and our trainer Vikas.",
    "name": "Sandhya",
    "designation": "Java Developer",
    "src": "https://glisteneducation.com/wp-content/uploads/.../john-doe.jpg"
  },
  {
    "quote": "Hello sir your teaching is good and the doubts you clear as simple is fabulous. Thank you!",
    "name": "Anees",
    "designation": "Junior Developer",
    "src": "https://glisteneducation.com/wp-content/uploads/.../elsie.jpg"
  },
  {
    "quote": "With Glisten I had a very good experience as I joined Glisten with an ambition of gaining knowledge and a dream of working in a reputed IT company. About the training, it is very satisfying. The faculty has helped me in preparing and getting ready for the IT industry.",
    "name": "Arun Janardhan",
    "designation": "IT manager",
    "src": "https://glisteneducation.com/wp-content/uploads/.../anthony.jpg"
  }
]


let activeIndex = 0;
const imageContainer = document.getElementById("image-container");
const nameElement = document.getElementById("name");
const designationElement = document.getElementById("designation");
const quoteElement = document.getElementById("quote");
const prevButton = document.getElementById("prev-button");
const nextButton = document.getElementById("next-button");

function calculateGap(width) {
  const minWidth = 1024;
  const maxWidth = 1456;
  const minGap = 60;
  const maxGap = 86;

  if (width <= minWidth) return minGap;
  if (width >= maxWidth)
    return Math.max(minGap, maxGap + 0.06018 * (width - maxWidth));

  return (
    minGap + (maxGap - minGap) * ((width - minWidth) / (maxWidth - minWidth))
  );
}

function updateTestimonial(direction) {
  const oldIndex = activeIndex;
  activeIndex =
    (activeIndex + direction + testimonials.length) % testimonials.length;

  const containerWidth = imageContainer.offsetWidth;
  const gap = calculateGap(containerWidth);
  const maxStickUp = gap * 0.8; // 80% of the calculated gap

  testimonials.forEach((testimonial, index) => {
    let img = imageContainer.querySelector(`[data-index="${index}"]`);
    if (!img) {
      img = document.createElement("img");
      img.src = testimonial.src;
      img.alt = testimonial.name;
      img.classList.add("testimonial-image");
      img.dataset.index = index;
      imageContainer.appendChild(img);
    }

    const offset =
      (index - activeIndex + testimonials.length) % testimonials.length;
    const zIndex = testimonials.length - Math.abs(offset);
    const opacity = index === activeIndex ? 1 : 1;
    const scale = index === activeIndex ? 1 : 0.85;

    let translateX, translateY, rotateY;
    if (offset === 0) {
      translateX = "0%";
      translateY = "0%";
      rotateY = "0deg";
    } else if (offset === 1 || offset === -2) {
      translateX = "20%";
      translateY = `-${(maxStickUp / img.offsetHeight) * 100}%`;
      rotateY = "-15deg";
    } else {
      translateX = "-20%";
      translateY = `-${(maxStickUp / img.offsetHeight) * 100}%`;
      rotateY = "15deg";
    }

    img.style.zIndex = zIndex;
    img.style.opacity = opacity;
    img.style.transform = `translate(${translateX}, ${translateY}) scale(${scale}) rotateY(${rotateY})`;
  });

  nameElement.textContent = testimonials[activeIndex].name;
  designationElement.textContent = testimonials[activeIndex].designation;
  quoteElement.innerHTML = testimonials[activeIndex].quote
    .split(" ")
    .map((word) => `<span class="word">${word}</span>`)
    .join(" ");

  animateWords();
}

function animateWords() {
  const words = quoteElement.querySelectorAll(".word");
  words.forEach((word, index) => {
    word.style.opacity = "0";
    word.style.transform = "translateY(10px)";
    word.style.filter = "blur(10px)";
    setTimeout(() => {
      word.style.transition =
        "opacity 0.2s ease-in-out, transform 0.2s ease-in-out, filter 0.2s ease-in-out";
      word.style.opacity = "1";
      word.style.transform = "translateY(0)";
      word.style.filter = "blur(0)";
    }, index * 20);
  });
}

function handleNext() {
  updateTestimonial(1);
}

function handlePrev() {
  updateTestimonial(-1);
}

prevButton.addEventListener("click", handlePrev);
nextButton.addEventListener("click", handleNext);

// Initial setup
updateTestimonial(0);

// Autoplay functionality
const autoplayInterval = setInterval(handleNext, 5000);

// Stop autoplay on user interaction
[prevButton, nextButton].forEach((button) => {
  button.addEventListener("click", () => {
    clearInterval(autoplayInterval);
  });
});

// Handle window resize
window.addEventListener("resize", () => updateTestimonial(0));
