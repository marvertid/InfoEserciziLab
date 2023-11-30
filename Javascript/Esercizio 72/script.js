/*Acquisire un testo lungo. Restituire numero di lettere, parole, frasi e righe.
MARVERTI DIEGO 4AI*/

let img = document.getElementById("img");
let imgLib = [
    "https://www.startpage.com/av/proxy-image?piurl=https%3A%2F%2Fgetwallpapers.com%2Fwallpaper%2Ffull%2F1%2Fe%2F4%2F890298-full-size-shrek-wallpapers-2560x1440.jpg&sp=1701333636T804bf31e789cba86ae7ba8e164a6f21267aa0d51815acba0344a9a732a773c8f",
    "https://www.startpage.com/av/proxy-image?piurl=https%3A%2F%2Fvignette.wikia.nocookie.net%2Fp__%2Fimages%2F7%2F7c%2F3191415-shrek_evsg_cg-s_shrek_02.png%2Frevision%2Flatest%3Fcb%3D20200705233946%26path-prefix%3Dprotagonist&sp=1701333636Td6397c10aec8b94faa556a38da7f4b1bf03bd8304580a764928d2cc3af63befc",
    "https://www.startpage.com/av/proxy-image?piurl=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.59B2fpeq8zRI44l587SEIAHaEX%26pid%3DApi&sp=1701333846T933dc245e9a6e4a98b5475b1c78e34f3c126048894cf952681642b5a7e073e01",
    "https://www.startpage.com/av/proxy-image?piurl=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.wL1CD8C9zFNqWBec_Nr2BwHaHY%26pid%3DApi&sp=1701333846Tb42b478d056cf9183e68664c4c2fa33db6ea00b525951b5683cace83add41035",
    "https://www.startpage.com/av/proxy-image?piurl=http%3A%2F%2Fcdn.wallpapersafari.com%2F90%2F86%2FrY70TN.jpg&sp=1701333888Tffc8965ff1006ba60f60400c8eb42cea6248e7010fc28307c194f782991423a2",
    "https://www.startpage.com/av/proxy-image?piurl=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.fQhL-xGh_QifdBufpDnbPgHaFj%26pid%3DApi&sp=1701333888T40ce4b0ac948a46910bfa07ba50bb6abfb38cc1c5db8cb686133bb6847b040fb",
    "https://www.startpage.com/av/proxy-image?piurl=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.BDKJGxtNDSs3zxfopDF_jwHaEK%26pid%3DApi&sp=1701333926T3d4d11551c6fe2500186a6eef51ab31af08076822aec3005445a940cca919618",
    "https://www.startpage.com/av/proxy-image?piurl=https%3A%2F%2Fi.etsystatic.com%2F21812990%2Fr%2Fil%2F1b6940%2F2314861823%2Fil_fullxfull.2314861823_gvzf.jpg&sp=1701334129T5dafc42fa169c98be2b1cc986bf06060fa2a38e35bb11cddd7701859d35675ca",
    "https://www.startpage.com/av/proxy-image?piurl=http%3A%2F%2Fassiste.com%2FAssiste%2Fmedia%2Fimages%2FJava_Duke.gif&sp=1701334151Tc311488af1624b54fd85db58625da9369c76fe9b6e79916c8791c8172db64644"
]

function random() {
    img.src = imgLib[(Math.floor(Math.random() * 9))];
}

