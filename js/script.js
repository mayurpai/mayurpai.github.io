const counters = document.querySelectorAll(".counter");

counters.forEach((counter) => {
  counter.innerHTML = 0;

  const updateCounter = () => {
    const targetCount = +counter.getAttribute("data-target");
    const startTarget = Number(counter.innerHTML);
    const updateTarget = targetCount / 100;
    if (startTarget < targetCount) {
      counter.innerHTML = `${Math.round(startTarget + updateTarget)}`;
      setTimeout(updateCounter, 20);
    } else {
      counter.innerHTML = targetCount;
    }
  };
  updateCounter();
});
