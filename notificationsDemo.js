var NotificationAlerts = function () {
  this.notifyUser = function () {
    if (!('Notification' in window)) {
      window.alert('This browser does not support desktop notification')
    } else if (Notification.permission === 'granted') {
      var d = new Date()
      $.ajax({
        url: 'ajax/findNotifications.php',
        data: { date: d },
        type: 'POST',
        dataType: 'html',
        success: function (data) {
        // console.log(data);
          var notification = new Notification('Notification', { body: data })
          notification.onshow = function () {
            console.log(data)
          }
        }
      })
    } else if (Notification.permission !== 'denied') {
      Notification.requestPermission(function (permission) {
        // If the user accepts, let's create a notification
        if (permission === 'granted') {
          var d = new Date()
          $.ajax({
            url: 'ajax/findNotifications.php',
            data: { date: d },
            type: 'POST',
            dataType: 'html',
            success: function (data) {
            // console.log(data);
              var notification = new Notification('Notification', { body: data })
              notification.onshow = function () {
                console.log(data)
              }
            }
          })
        }
        notification.onshow = function () {
          console.log('Notification shown')
        }
      })
    }
  }

  this.stopNotifying = function (int) {
    clearInterval(int)
    console.log('Stopped')
  }
}
