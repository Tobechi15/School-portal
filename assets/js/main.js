

// let extraRoomValue = new Number(extraRoom.value);


let addForm = document.querySelectorAll('.addNew');
let tableBody = document.querySelectorAll('.bodyToAdd');

for(let count = 0; count < tableBody.length; count++){

addForm[count].addEventListener('submit', e => {
	e.preventDefault();

	const input = addForm[count].querySelector('input').value.trim();
[]
	let tr = document.createElement('tr');

	tr.innerHTML = `
            <td>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" value="">
                  <span class="form-check-sign">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
            </td>
            <td>${input}</td>
            <td class="td-actions text-right">
              <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                <i class="material-icons">close</i>
              </button>
            </td>
	`;

	if (input.length > 3) {
		tableBody[count].appendChild(tr);
	} else {
		tableBody[count];
	}

});

let deleteTable = tableBody[count].querySelectorAll('.td-actions');

let tableBodyRow = tableBody[count].querySelectorAll('tr');



for (let i = 0; i < tableBodyRow.length; i++) {
	deleteTable[i].onclick = () => {
		// tableBody.children[i].remove();
		deleteTable[i].parentElement.remove();
	};
}
};

const vatCard = document.querySelector('.vatCard');

const moreBtn = vatCard.querySelector('button');

const vatTable = vatCard.querySelector('table');

moreBtn.addEventListener( 'click', function(){
	vatTable.classList ='table table-hover show';
	moreBtn.innerHTML = `<i class="material-icons">close</i>`

	moreBtn.onclick = () => {
		vatTable.classList = 'table table-hover income';
		moreBtn.innerHTML = `<i class="material-icons">more_horiz</i>`;
	};
});
