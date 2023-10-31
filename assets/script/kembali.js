// javascript untuk sidebar
let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");
closeBtn.addEventListener("click", () => {
  sidebar.classList.toggle("open");
});

// JavaScript untuk submenu
const dropdownToggle = document.querySelector(".dropdown-toggle");
const dropdownContainer = document.querySelector(".dropdown-container");

let isSubMenuVisible = false;
dropdownContainer.style.display = "none";
dropdownToggle.addEventListener("click", function (event) {
  event.preventDefault();
  // Toggle tampilan submenu
  isSubMenuVisible = !isSubMenuVisible;
  if (isSubMenuVisible) {
    dropdownContainer.style.display = "block";
  } else {
    dropdownContainer.style.display = "none";
  }
});
document.addEventListener("click", function (event) {
  const target = event.target;
  if (
    isSubMenuVisible &&
    !target.closest(".dropdown") &&
    !target.closest(".dropdown-container")
  ) {
    isSubMenuVisible = false;
    dropdownContainer.style.display = "none";
  }
});
// minjem
const tableBody = document.querySelector("tbody");

// Fungsi untuk mengisi tabel
function populateTable() {
  tableBody.innerHTML = "";
  data.forEach((item) => {
    const row = document.createElement("tr");
    row.innerHTML = `
            <td>${item.noPeminjaman}</td>
            <td>${item.namaPeminjam}</td>
            <td>${item.tanggalPeminjaman}</td>
            <td>${item.tanggalPengembalian}</td>
            <td>${item.status}</td>
        `;
    tableBody.appendChild(row);
  });
}

// Panggil fungsi untuk mengisi tabel
populateTable();

