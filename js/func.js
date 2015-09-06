// JavaScript Document
function cancel()
{
	$("#text_title").val("");
	$("#text_name").val("");
	$("#text_content").val("");
}

function submit()
{
	document.info.submit();
}

function check()
{
	if ($("#text_title").val() == "")
	{
		alert("Title为空!");
		return false;
	}
	else if ($("#text_name").val() == "")
	{
		alert("Name为空！");
		return false;
	}
	else if ($("#text_content").val() == "")
	{
		alert("Content为空！");
		return false;
	}
	else
	{
		submit();
		return true;
	}
}