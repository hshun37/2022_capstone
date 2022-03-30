/* SCROLL MAGIC */
const spyEls = document.querySelectorAll('section.scroll-spy');
spyEls.forEach(function (spyEl) {
  new ScrollMagic
    .Scene({
      triggerElement: spyEl, // 보여짐 여부를 감시할 요소를 지정
      triggerHook: 0.8 // 뷰포트가 시작하는 가장 윗부분은 0, 가장 아랫부분은 1이다. 고로 중간 부분은 0.5이다. 0.8은 0과 1사이의 뷰포트 지정에 트리거훅이 걸려있다. 보여짐 감시에 대한 트리거가 걸려있게 된다.
    })
    .setClassToggle(spyEl, 'show')
    .addTo(new ScrollMagic.Controller());
});

// to-top 기능
const toTopEl = document.querySelector('#to-top');
toTopEl.addEventListener('click', function () {
  gsap.to(window, 1, { 
    scrollTo: 0
  });
})

/* 배지 보이기 숨기기 파트 */
// window: 화면, 창이라고 생각하면 됨
// _.throttle(함수, ms단위 시간/함수실행시간) : 사용자가 화면을 스크롤할때 어떤 함수를 실행하는데 그 함수를 적게 실행하기 위해서 사용
window.addEventListener('scroll', _.throttle(function () {
  console.log(window.scrollY); // 스크롤 Y상의 위치를 알려주는 메소드
  if (window.scrollY > 800) {
    // gsap.to(요소, s단위 시간/지속시간, 옵션/css값들을 넣을 수 있다.);
    // 버튼 보이기!(to-top)
    gsap.to(toTopEl, 0.2, {
      x: 0
    });
  } else {
    // 버튼 숨기기!(to-top)
    gsap.to(toTopEl, 0.2, {
      x: 100
    });
  }
}, 300));