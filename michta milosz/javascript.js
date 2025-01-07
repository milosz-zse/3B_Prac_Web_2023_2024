const users = [];
let currentId = 1;

function addUser() {
  const name = document.getElementById("addName").value;
  const email = document.getElementById("addEmail").value;
  const age = parseInt(document.getElementById("addAge").value);

  if (!email.includes("@")) {
    alert("Błąd: Email musi zawierać znak @.");
    return;
  }
  if (isNaN(age) || age <= 0) {
    alert("Błąd: Wiek musi być liczbą większą od 0.");
    return;
  }

  const newUser = {
    id: currentId,
    name: name,
    email: email,
    age: age,
  };

  users.push(newUser);
  currentId++;
  displayUsers();
  clearInputs();
}

function editUser() {
  const id = parseInt(document.getElementById("editId").value);
  const newName = document.getElementById("editName").value;
  const newEmail = document.getElementById("editEmail").value;
  const newAge = parseInt(document.getElementById("editAge").value);

  let user = null;
  for (let i = 0; i < users.length; i++) {
    if (users[i].id === id) {
      user = users[i];
      break;
    }
  }

  if (!user) {
    alert("Błąd: Użytkownik o podanym ID nie istnieje.");
    return;
  }

  if (!user) {
    alert("Błąd: Użytkownik o podanym ID nie istnieje.");
    return;
  }

  if (newEmail && !newEmail.includes("@")) {
    alert("Błąd: Email musi zawierać znak @.");
    return;
  }

  if (newAge && (isNaN(newAge) || newAge <= 0)) {
    alert("Błąd: Wiek musi być liczbą większą od 0.");
    return;
  }

  user.name = newName || user.name;
  user.email = newEmail || user.email;
  user.age = newAge || user.age;

  displayUsers();
  clearInputs();
}

function deleteUser() {
  const id = parseInt(document.getElementById("deleteId").value);
  const index = users.findIndex((u) => u.id === id);

  if (index === -1) {
    alert("Błąd: Użytkownik o podanym ID nie istnieje.");
    return;
  }

  users.splice(index, 1);
  displayUsers();
  clearInputs();
}

function displayUsers() {
  const tbody = document.getElementById("users-tbody");
  tbody.innerHTML = "";

  if (users.length === 0) {
    tbody.innerHTML =
      '<tr><td colspan="4">Brak użytkowników w systemie.</td></tr>';
    return;
  }

  users.forEach((user) => {
    const row = document.createElement("tr");
    row.innerHTML = `
            <td>${user.id}</td>
            <td>${user.name}</td>
            <td>${user.email}</td>
            <td>${user.age}</td>
        `;
    tbody.appendChild(row);
  });
}

function clearInputs() {
  document.getElementById("addName").value = "";
  document.getElementById("addEmail").value = "";
  document.getElementById("addAge").value = "";
  document.getElementById("editId").value = "";
  document.getElementById("editName").value = "";
  document.getElementById("editEmail").value = "";
  document.getElementById("editAge").value = "";
  document.getElementById("deleteId").value = "";
}

displayUsers();
