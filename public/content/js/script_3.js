if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
    var root = document.getElementsByTagName('html')[0]
    root.className += " no-touch";
}