const translations = {
  tk: {
    home: "Baş sahypa",
    services: "Hyzmatlar",
    track: "Ýük Yzarlama",
    contact: "Habarlaşmak",
    welcome: "Hoş geldiňiz TurkmenBridge!",
    intro: "Biz size ygtybarly we tiz ýük daşaýyş hyzmatlaryny hödürleýäris.",
    track_now: "Ýüküňizi Yzarlap Görüň"
  },
  ru: {
    home: "Главная",
    services: "Услуги",
    track: "Отслеживание",
    contact: "Контакты",
    welcome: "Добро пожаловать в TurkmenBridge!",
    intro: "Мы предлагаем надежные и быстрые грузовые услуги.",
    track_now: "Отследить груз"
  },
  en: {
    home: "Home",
    services: "Services",
    track: "Track",
    contact: "Contact",
    welcome: "Welcome to TurkmenBridge!",
    intro: "We offer reliable and fast cargo services.",
    track_now: "Track Your Shipment"
  },
  zh: {
    home: "主页",
    services: "服务",
    track: "追踪",
    contact: "联系",
    welcome: "欢迎来到 TurkmenBridge！",
    intro: "我们提供可靠快捷的货运服务。",
    track_now: "追踪您的货物"
  }
};

document.getElementById("language-switcher").addEventListener("change", function () {
  const lang = this.value;
  document.querySelectorAll("[data-i18n]").forEach(el => {
    const key = el.getAttribute("data-i18n");
    el.textContent = translations[lang][key];
  });
});
