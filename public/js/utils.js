function _saveCurrentPage(pgNo)
{
	$.ajax(
	{
		url: `/savePage/${pgNo}`,
    type: 'POST',
    data: $('#myForm').serialize()
	})
}