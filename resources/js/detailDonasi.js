const detailCerita = document.getElementById('detail-donasi-cerita');
const detailSpesifikasi = document.getElementById('detail-donasi-spesifikasi');
const detailPenerima = document.getElementById('detail-donasi-penerima');

const linkCerita = document.getElementById('link-cerita');
const linkSpesifikasi = document.getElementById('link-spesifikasi');
const linkPenerima = document.getElementById('link-penerima');

linkCerita.addEventListener("click",() => {
    removeAll();
    linkCerita.classList.add("active");
    detailCerita.classList.add("showing");
});

linkSpesifikasi.addEventListener("click",() => {
    removeAll();
    linkSpesifikasi.classList.add("active");
    detailSpesifikasi.classList.add("showing");
});

linkPenerima.addEventListener("click",() => {
    removeAll();
    linkPenerima.classList.add("active");
    detailPenerima.classList.add("showing");
});

const removeAll = () => {
    detailCerita.classList.remove("showing");
    detailSpesifikasi.classList.remove("showing");
    detailPenerima.classList.remove("showing");
    linkCerita.classList.remove("active");
    linkPenerima.classList.remove("active");
    linkSpesifikasi.classList.remove("active");
}
