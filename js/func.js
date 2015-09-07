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

function click_require(num,id)
{
	$("#status_btn_"+num).text("需求分析");
	$("#status").val("需求分析");
	$("#status_id").val(id);
	$("#status_btn_"+num).removeClass().addClass("btn btn-primary dropdown-toggle");
}

function click_demo(num,id)
{
	$("#status_btn_"+num).text("Demo开发");
	$("#status").val("Demo开发");
	$("#status_id").val(id);
	$("#status_btn_"+num).removeClass().addClass("btn btn-success dropdown-toggle");
}

function click_test(num,id)
{
	$("#status_btn_"+num).text("电信测试");
	$("#status").val("电信测试");
	$("#status_id").val(id);
	$("#status_btn_"+num).removeClass().addClass("btn btn-info dropdown-toggle");
}

function click_official(num,id)
{
	$("#status_btn_"+num).text("电信正式");
	$("#status").val("电信正式");
	$("#status_id").val(id);
	$("#status_btn_"+num).removeClass().addClass("btn btn-warning dropdown-toggle");
}

function checkStatus()
{
	if ($("#status").val() == "")
	{
		alert("Status为空！");
		return false;
	}
	else if ($("#status_id").val() == "")
	{
		alert("Status ID 为空！");
		return false;
	}
	else
	{
		submit_status();
		return true;
	}
}

function submit_status()
{
	document.update_table_status.submit();
}