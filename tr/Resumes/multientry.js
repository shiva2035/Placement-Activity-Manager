function add()
{
	var $el = $('<tr><td><input>').attr('id','input'+count()).attr('value','inputid'+count());
	$('#myform').append($el);
}
function count()
{
	var myform = document.getElementById('myform');
	var inputTags = myform.getElementsByTagName('input');
	var counter = 0;
	for (var i=0, length = inputTags.length; i<length; i++)
	{
	     if (inputTags[i].type == 'text')
	     {
	     	counter++;
	     }
	}
	return counter;
}

