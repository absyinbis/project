		var table = document.getElementById("user_table");
                
        for(var i = 1; i < table.rows.length ; i++)
        {
        	table.rows[i].onclick = function()
        	{
            //rIndex = this.rowIndex;
            document.getElementById("id_u").value = this.cells[0].innerHTML;
            document.getElementById("name_u").value = this.cells[1].innerHTML;
            document.getElementById("username_u").value = this.cells[2].innerHTML;
            document.getElementById("password_u").value = this.cells[3].innerHTML;
            document.getElementById("en_u").value = AesCtr.encrypt(this.cells[3].innerHTML,'absy', 256);
            document.getElementById("phonenumber_u").value = this.cells[4].innerHTML;
            var selected1 = document.getElementById("ps_select");
            var selected2 = document.getElementById("access_select");

            for (var  i = 0; i < selected1.length ; i++)
                if (selected1.options[i].text == this.cells[5].innerHTML)
                    selected1.selectedIndex = i;

            switch (this.cells[6].innerText) {
                    case 'مسؤل النظام':
                        selected2.selectedIndex = 1;
                        selected1.disabled = true;
                        break;
                    case 'مسؤل مركز شرطة':
                        selected2.selectedIndex = 2;
                        selected1.disabled = false;
                        break;
                    case 'وكيل النيابة':
                        selected2.selectedIndex = 3;
                        selected1.disabled = false;
                        break;
                    case 'موظف':
                        selected2.selectedIndex = 4;
                        selected1.disabled = false;
                        break;
                    case 'مستخدم جوال':
                        selected2.selectedIndex = 5;
                        selected1.disabled = false;
                        break;                      
                    }
        	};
        }