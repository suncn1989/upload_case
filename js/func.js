// JavaScript Document

var type_choose_group = null;
/*
$('#btn-new').on('click', function () {
    $(this).val("fuck me"); // button text will be "finished!"
  })
*/
$(document).ready(function(){
	$('#btn-new').on('click', function () {
		$(this).attr("class","btn btn-info btn-lg");
		$('#btn-modify').attr("class","btn btn-default btn-lg");
		$('#btn-optimize').attr("class","btn btn-default btn-lg");
		type_choose_group = "new";
	});
	$('#btn-modify').on('click', function () {
		$(this).attr("class","btn btn-info btn-lg");
		$('#btn-new').attr("class","btn btn-default btn-lg");
		$('#btn-optimize').attr("class","btn btn-default btn-lg");
		type_choose_group = "modify";
	});
	$('#btn-optimize').on('click', function () {
		$(this).attr("class","btn btn-info btn-lg");
		$('#btn-new').attr("class","btn btn-default btn-lg");
		$('#btn-modify').attr("class","btn btn-default btn-lg");
		type_choose_group = "optimize";
	});

});

function cancel()
{
	$("#text_title").val("");
	$("#text_name").val("");
	$("#text_content").val("");
}

function submit()
{
	alert(type_choose_group);
		$.ajax({
		url:"info_add.php",
		type:"POST",
		data:{type_choose:type_choose_group},
		});
	document.info.submit();
}

function check()
{
	if ($("#text_title").val() == "")
	{
		alert("需求名称为空!");
		return false;
	}
	else if ($("#text_name").val() == "")
	{
		alert("上传人姓名为空！");
		return false;
	}
	else if ($("#text_content").val() == "")
	{
		alert("需求内容为空！");
		return false;
	}
	else if (type_choose_group == null)
	{
		alert("请选择更新类型！");
		return false;
	}
	else
	{
	
		submit();
		return true;
	}
	
	//alert($)
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