var selectedYear = new Date().getYear();
    var monthOptions = null;
    

    function createOption(text, value)
    {
                var option = new Option();
                option.text = text;
                option.value = value;
                return option;
    }
                

    function getMonthOptions()
    {
                if (monthOptions == null)
                {
                        monthOptions = new Array();
                        monthOptions[monthOptions.length] = createOption("January", 0);
                        monthOptions[monthOptions.length] = createOption("February", 1);
                        monthOptions[monthOptions.length] = createOption("March", 2);
                        monthOptions[monthOptions.length] = createOption("April", 3);
                        monthOptions[monthOptions.length] = createOption("May", 4);
                        monthOptions[monthOptions.length] = createOption("June", 5);
                        monthOptions[monthOptions.length] = createOption("July", 6);
                        monthOptions[monthOptions.length] = createOption("August", 7);
                        monthOptions[monthOptions.length] = createOption("September", 8);
                        monthOptions[monthOptions.length] = createOption("October", 9);
                        monthOptions[monthOptions.length] = createOption("November", 10);
                        monthOptions[monthOptions.length] = createOption("December", 11);
                }
                return monthOptions;
    }
    

    function loadMonths()
    {
                var monthsList = document.getElementById('month');
                if (monthsList.options.length == 0)
                {
                        var options = getMonthOptions();
                        for(var i = 0; i < options.length; i++)
                                monthsList.options[i] = options[i];
                }
    }
    

    function clearOptions(list)
    {
                for(var i = 0; i < list.options.length; i ++)
                        list.options[i] = null;
    }
    

    function loadDays()
    {
                var date = new Date();
                var month = document.getElementById('month').value;
                var year = selectedYear;
                

                month ++;
                if (month == 12) // if it was december, move to next year
                {
                        month = 0;
                        year ++;
                }
                

                // get the next month's first day and substract a day to obtain the last day in the selected month
                date.setFullYear(year, month, 1);
                date.setDate(0);
                

                var days = date.getDate();
                

                var daysList = document.getElementById('day');
                clearOptions(daysList);
                

                for(var i = 1; i <= days; i++)
                        daysList.options[i - 1] = new Option(i);
    }
    

    function onYearChanged()
    {
                var textbox = document.getElementById('year');
                if (isNaN(textbox.value))
                        textbox.value = selectedYear;
                selectedYear = parseInt(textbox.value);
                textbox.value = selectedYear;
                loadMonths();
                loadDays();
    }
    

    function onMonthChanged()
    {
                loadDays();
    }