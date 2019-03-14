# تطبيق PhoneTrack Nextcloud

📱 PhoneTrack هو تطبيق لتخزين معلومات على الهواء و لتحديد اماكن الهواتف.

يستلم المعلومات من برنامج نظام الهاتف و يحددها على الخارطه بوضوح.

🌍 Help us to translate this app on [PhoneTrack Crowdin project](https://crowdin.com/project/phonetrack).

ابحث الطرق الاخرى لمساعدتنا فى[مشاهدة كل الاسهم](https://gitlab.com/eneiluj/phonetrack-oc/blob/master/CONTRIBUTING.md).

طريقة استعمال PhoneTrack:

* اوجد جلسة للتحقيق.
* اعطى رابط الولوج link\ * الى الهاتف. انتخب [طريق الدخول للنظام](https://gitlab.com/eneiluj/phonetrack-oc/wikis/userdoc#logging-methods) الذى تريده.
* شاهد الان الجلسه المحلية (او لا) فى PhoneTrack و شاركه مع الصفحات العامه.

(\*) Don't forget to set the device name in the link (rather than in the logging app settings). استبدل"Yourname"مع الاسم الذى تريده. Setting the device name in logging app settings only works with Owntracks, Traccar and OpenGTS.

On PhoneTrack main page, while watching a session, you can :

* 📍 Display location history
* ⛛ Filter points
* ✎ Manually edit/add/delete points
* ✎ Edit devices (rename, change color/shape, move to another session)
* ⛶ Define geofencing zones for devices
* ⚇ Define proximity alerts for device pairs
* 🖧 Share a session to other Nextcloud users or with a public link (read-only)
* 🔗 Generate public share links with optional restrictions (filters, device name, last positions only, geofencing simplification)
* 🖫 Import/export a session in GPX format (one file with one track per device or one file per device)
* 🗠 Display sessions statistics
* 🔒 [Reserve a device name](https://gitlab.com/eneiluj/phonetrack-oc/wikis/userdoc#device-name-reservation) to make sure only authorized user can log with this name
* 🗓 Toggle session auto export and auto purge (daily/weekly/monthly)
* ◔ Choose what to do when point number quota is reached (block logging or delete oldest point)

Public page and public filtered page work like main page except there is only one session displayed, everything is read-only and there is no need to be logged in.

This app is tested on Nextcloud 15 with Firefox 57+ and Chromium.

This app is compatible with theming colors and accessibility themes !

This app is under development.

## Install

See the [AdminDoc](https://gitlab.com/eneiluj/phonetrack-oc/wikis/admindoc) for installation details.

Check [CHANGELOG](https://gitlab.com/eneiluj/phonetrack-oc/blob/master/CHANGELOG.md#change-log) file to see what's new and what's coming in next release.

Check [AUTHORS](https://gitlab.com/eneiluj/phonetrack-oc/blob/master/AUTHORS.md#authors) file to see complete list of authors.

## Known issues

* PhoneTrack **now works** with Nextcloud group restriction activated. See [admindoc](https://gitlab.com/eneiluj/phonetrack-oc/wikis/admindoc#issue-with-phonetrack-restricted-to-some-groups-in-nextcloud).

Any feedback will be appreciated.