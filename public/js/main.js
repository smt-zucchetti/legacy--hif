
document.querySelectorAll('#page_sel_btn, .page_sel_a').forEach(el => 
{
		el.addEventListener('click', (e) =>
		{
			const curPage = document.querySelector('#myForm > input[name="curPage"]').value
			_saveCurrentPage(curPage)
			if(e.target.id === 'page_sel_btn')
			{
				const selectEl = document.querySelector('#page_sel_dd') 
				const newPage = selectEl.options[selectEl.selectedIndex].value
				window.location.href = `/page/${newPage}`
			}
		})
})
