

// public/js/script.js

document.addEventListener('DOMContentLoaded', function () {
  const cartItems = [];

  function updateTotalAmount() {
    const totalAmount = cartItems.reduce(
      (total, item) => total + item.unitPrice * item.quantity,
      0
    );

    const totalAmountElement = document.getElementById('total-amount');
    totalAmountElement.innerText = `$${totalAmount.toFixed(2)}`;
  }

  function removeFromCart(index) {
    cartItems.splice(index, 1);
    updateTotalAmount();
    displayCartItems();
  }

  function displayCartItems() {
    const cartContainer = document.getElementById('cart-container');
    cartContainer.innerHTML = '';

    cartItems.forEach((item, index) => {
      const row = document.createElement('div');
      row.innerHTML = `
        <span>${item.medicineName} - $${item.unitPrice} x ${item.quantity}</span>
        <button onclick="removeFromCart(${index})">Remove</button>
      `;
      cartContainer.appendChild(row);
    });
  }

  const form = document.getElementById('medicine-form');

  form.addEventListener('submit', function (event) {
    event.preventDefault();

    const formData = new FormData(form);
    const newItem = {
      medicineName: formData.get('medicine_name'),
      unitPrice: parseFloat(formData.get('unit_price')),
      quantity: parseInt(formData.get('quantity')),
    };

    cartItems.push(newItem);
    form.reset();
    updateTotalAmount();
    displayCartItems();
  });
});

