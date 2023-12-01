let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");
closeBtn.addEventListener("click", () => {
  sidebar.classList.toggle("open");
});

// JavaScript untuk submenu
const dropdownToggle = document.querySelector(".dropdown-toggle");
const dropdownContainer = document.querySelector(".dropdown-container");

let isSubMenuVisible = false; // Menyimpan status tampilan submenu

// Menutup submenu saat halaman pertama kali dimuat
dropdownContainer.style.display = "none";

// Menggunakan event listener pada elemen "Transaksi" untuk mengatur submenu
dropdownToggle.addEventListener("click", function (event) {
  event.preventDefault(); // Menghindari navigasi saat elemen "Transaksi" diklik

  // Toggle tampilan submenu
  isSubMenuVisible = !isSubMenuVisible;
  if (isSubMenuVisible) {
    dropdownContainer.style.display = "block";
  } else {
    dropdownContainer.style.display = "none";
  }
});

// Menutup submenu saat klik di luar submenu atau elemen "Transaksi"
document.addEventListener("click", function (event) {
  const target = event.target;

  // Cek apakah yang diklik bukan elemen "Transaksi" atau submenu
  if (
    isSubMenuVisible &&
    !target.closest(".dropdown") &&
    !target.closest(".dropdown-container")
  ) {
    isSubMenuVisible = false;
    dropdownContainer.style.display = "none";
  }
});

//btn print
function printReport() {
  var table = document.getElementById("laporanTable");
  var printWindow = window.open("", "_blank");
  printWindow.document.open();
  printWindow.document.write("<html><head><title>Laporan</title></head><body>");
  printWindow.document.write(table.outerHTML);
  printWindow.document.write("</body></html>");
  printWindow.document.close();
  printWindow.print();
  printWindow.close();
}

// Menambahkan event listener untuk tombol cetak
document.getElementById("btnPrint").addEventListener("click", printReport);



