document.addEventListener("DOMContentLoaded", function () {
    let objects = document.querySelectorAll(".floating-object");
    let bgConsumer = document.querySelector(".bg-consumer") || document.querySelector(".bg-farm");
    let mainContent = document.getElementById("main-content");
    let footer = document.querySelector("footer");

    if (!bgConsumer || !mainContent) {
        console.warn("bg-consumer または main-content が見つかりませんでした");
        return;
    }

    function adjustBackgroundHeight() {
        requestAnimationFrame(() => {
            let contentHeight = mainContent.scrollHeight;
            let footerHeight = footer ? footer.offsetHeight : 0;
            let windowHeight = window.innerHeight;
            let minHeight = Math.max(contentHeight + footerHeight, windowHeight);
            
            bgConsumer.style.minHeight = `${minHeight}px`;
        });
    }

    // `load` イベントを使用して完全に読み込まれてから高さを設定
    window.addEventListener("load", adjustBackgroundHeight);
    window.addEventListener("resize", adjustBackgroundHeight);

    // `floating-object` のランダム位置設定
    objects.forEach(obj => {
        let randomX = Math.random() * 80 + 10;
        let randomY = Math.random() * 80 + 10;
        obj.style.left = `${randomX}%`;
        obj.style.top = `${randomY}%`;
    });

    // スクロール時のアニメーション処理
    let lastScrollY = window.scrollY;
    let ticking = false;

    function onScroll() {
        if (!ticking) {
            window.requestAnimationFrame(() => {
                let scrollPosition = window.scrollY;
                objects.forEach((obj, index) => {
                    let movement = (scrollPosition / (index + 1)) * 2.5;
                    obj.style.transform = `translate(0px, ${movement}px)`;
                });

                lastScrollY = scrollPosition;
                ticking = false;
            });

            ticking = true;
        }
    }

    window.addEventListener("scroll", onScroll);
});