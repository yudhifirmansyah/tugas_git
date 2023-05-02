body {
  margin: 0;
  padding: 0;
}

#banner {
    height: 100vh;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

#banner #banner-images {
    height: 100%;
    position: relative;
    object-fit: cover;
    z-index: -10;
    filter: brightness(0.7) grayscale(0.6);
    animation: banner-change 15s infinite ease-in-out;
    display: flex;
    flex-direction: row;
}
#banner #banner-images img {
    width: 100vw;
    object-fit: cover;
}

@keyframes banner-change{
    0% {
        right: -200vw;
        filter: brightness(0.7) grayscale(0.6);
    }
    20.5% {
        right: -200vw;
        filter: brightness(0.7) grayscale(0.6);
    }
    22.5% {
        right: -200vw;
        filter: brightness(0) grayscale(0.6);
    }
    23% {
        right: -100vw;
        filter: brightness(0) grayscale(0.6);
    }
    25% {
        right: -100vw;
        filter: brightness(0.7) grayscale(0.6);
    }
    45.5% {
        right: -100vw;
        filter: brightness(0.7) grayscale(0.6);
    }
    47.5% {
        right: -100vw;
        filter: brightness(0) grayscale(0.6);
    }
    48% {
        right: 0vw;
        filter: brightness(0) grayscale(0.6);
    }
    50% {
        right: 0vw;
        filter: brightness(0.7) grayscale(0.6);
    }
    70.5% {
        right: 0vw;
        filter: brightness(0.7) grayscale(0.6);
    }
    72.5% {
        right: 0vw;
        filter: brightness(0) grayscale(0.6);
    }
    73% {
        right: 100vw;
        filter: brightness(0) grayscale(0.6);
    }
    75% {
        right: 100vw;
        filter: brightness(0.7) grayscale(0.6);
    }
    95.5% {
        right: 100vw;
        filter: brightness(0.7) grayscale(0.6);
    }
    97.5% {
        right: 100vw;
        filter: brightness(0) grayscale(0.6);
    }
    98% {
        right: 200vw;
        filter: brightness(0) grayscale(0.6);
    }
    100% {
        right: 200vw;
        filter: brightness(0.7) grayscale(0.6);
    }
}

#banner h1 {
    position: absolute;
    font-family: sans-serif;
    font-size: 40px;
    letter-spacing: 8px;
    color: rgb(230,255,255);
    text-shadow: 2px 2px 8px rgb(206, 206, 206);
    animation: color-cycle 5s infinite ease-in-out;
    color: rgb(233, 233, 233);
    text-transform: uppercase;
    margin-top: -14px;
    text-align: center;
    width: 90%;
}


<div id="banner">
  <div id="banner-images">
      <img src="https://cdn.pixabay.com/photo/2018/08/14/13/23/ocean-3605547__480.jpg" alt=""/>
      <img src="https://cdn.pixabay.com/photo/2018/01/14/23/12/nature-3082832__480.jpg" alt=""/>
      <img src="https://images.pexels.com/photos/3586966/pexels-photo-3586966.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""/>
      <img src="https://c4.wallpaperflare.com/wallpaper/362/276/920/nature-4k-pc-full-hd-wallpaper-thumb.jpg" alt=""/>
      <img src="https://cdn.pixabay.com/photo/2018/08/14/13/23/ocean-3605547__480.jpg" alt=""/>
  </div>
  <h1>Yudhi Firmansyah</h1>
</div>
