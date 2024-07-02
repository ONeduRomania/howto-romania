function setGridView() {
    const institutionsSection = document.querySelector('.institutions');
    institutionsSection.classList.remove('list-view');
    institutionsSection.classList.add('grid-view');

    const gridViewButton = document.querySelector('.grid-view');
    const listViewButton = document.querySelector('.list-view');
    gridViewButton.classList.add('active');
    listViewButton.classList.remove('active');
}

function setListView() {
    const institutionsSection = document.querySelector('.institutions');
    institutionsSection.classList.remove('grid-view');
    institutionsSection.classList.add('list-view');

    const gridViewButton = document.querySelector('.grid-view');
    const listViewButton = document.querySelector('.list-view');
    gridViewButton.classList.remove('active');
    listViewButton.classList.add('active');
}
