
const arrows = document.querySelectorAll('.rtarrow')

arrows.forEach(arrow => 
{
	arrow.addEventListener('click', (e)=>
	{
		const curPage = document.querySelector('#myForm > input[name="curPage"]').value
		_saveCurrentPage(curPage)
		_showNextRoomDesc(e)
	})
})

function _showNextRoomDesc(e)
{
	const dir = Object.freeze({
			Left: 'left',
			Right: 'right'
	})
	let tgtClssLst = e.target.classList
	let arrowDir = tgtClssLst.contains('rtleft') ? dir.Left : tgtClssLst.contains('rtright') ? dir.Right : null
	
	if(!arrowDir)
	{
		return
	}

	const oldActiveForm = document.querySelector('.paginatedForm.active')
	const oldId = parseInt(oldActiveForm.dataset.id)

	const contCount = document.querySelectorAll('.paginatedForm').length

	if((arrowDir === dir.Left && oldId === 1) || (arrowDir === dir.Right && oldId === contCount))
	{
		return
	}

	oldActiveForm.classList.remove('active')

	const newFormNo = arrowDir === dir.Left ? oldId - 1 : arrowDir === dir.Right ? oldId + 1 : null
	
	if(!newFormNo)
	{
		return
	}
	const el = document.querySelector(`.paginatedForm[data-id='${newFormNo}']`)
	
	if(el)
	{
		el.classList.add('active')
	}

	_updateFormNumber(newFormNo)
}

function _updateFormNumber(formNo)
{
	document.querySelector('.curFormNo').innerHTML = formNo
}