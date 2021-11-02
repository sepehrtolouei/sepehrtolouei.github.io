$(document).ready(function () {
    const datepickerDOM = $("#persianDatapicker");
    const dateObject = datepickerDOM.persianDatepicker(
        {
        "inline": false,
        "format": "LLLL",
        "viewMode": "day",
        "initialValue": true,
        "minDate": false,
        "maxDate": false,
        "autoClose": true,
        "position": "auto",
        "altFormat": "lll",
        "altField": "#altfieldExample",
        "onlyTimePicker": false,
        "onlySelectOnDate": false,
        "calendarType": "persian",
        "inputDelay": 800,
        "observer": false,
        "calendar": {
            
            "persian": {
                "locale": "fa",
                "showHint": true,
                "leapYearMode": "algorithmic"
            },
            "gregorian": {
                "locale": "en",
                "showHint": true
            }
        },
        "navigator": {
            "enabled": true,
            "scroll": {
                "enabled": true
            },
            "text": {
                "btnNextText": "<",
                "btnPrevText": ">"
            }
        },
        "toolbox": {
            "enabled": true,
            "calendarSwitch": {
                "enabled": true,
                "format": "MMMM"
            },
            
            
        },
        
        // "dayPicker": {
        //     "enabled": true,
        //     "titleFormat": "YYYY MMMM"
        // },
        // "monthPicker": {
        //     "enabled": true,
        //     "titleFormat": "YYYY"
        // },
        // "yearPicker": {
        //     "enabled": true,
        //     "titleFormat": "YYYY"
        // },
        "responsive": true,
        "onSelect" : function(){
           
            alert(`تاریخ انتخاب شده : ${date.year}/${date.month}/${date.date}`);
        }
    });

    const date = dateObject.getState().view;

    

    
});