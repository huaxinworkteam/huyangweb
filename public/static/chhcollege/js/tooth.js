(function(w, d, e, x) {
  w[e] = function() {
    w.cbk = w.cbk || [];
    w.cbk.push(arguments);
  };
  x = d.createElement("script");
  x.async = true;
  x.id = "zhichiScript";
  x.className = "zhiCustomBtn";
  x.src =
    "https://chat.sobot.com/chat/frame/v2/entrance.js?sysnum=126a3b647d5247f38d75f041556992c8&channelid=4";
  d.body.appendChild(x);
})(window, document, "zc");
zc("config", {
  custom: true, //设置自定义生效 第二步
  auto_expand: false,
  groupid: "233195822bd640f09e773888d6024de3"
});
