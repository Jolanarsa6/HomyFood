(function () {
    const html = document.documentElement;
    const body = document.body;

    // const themeToggle = document.getElementById("themeToggle");
    // const langToggle = document.getElementById("langToggle");

    const side = document.getElementById("sidebar");
    const sideOverlay = document.getElementById("sidebarOverlay");
    const openSideBtn = document.getElementById("menuToggle");
    const closeSideBtn = document.getElementById("closeSidebar");

    const compareModal = document.getElementById("comparePickModal");

    // function setTheme(theme) {
    //     if (theme === "dark") {
    //         html.classList.add("dark");
    //     } else {
    //         html.classList.remove("dark");
    //     }
    //     localStorage.setItem("homy-theme", theme);
    // }

    // function toggleTheme() {
    //     const isDark = html.classList.contains("dark");
    //     setTheme(isDark ? "light" : "dark");
    // }

    // function setLang(lang) {
    //     html.setAttribute("lang", lang);
    //     html.setAttribute("dir", lang === "ar" ? "rtl" : "ltr");
    //     localStorage.setItem("homy-lang", lang);
    // }

    // function toggleLang() {
    //     const current = html.getAttribute("lang") || "ar";
    //     setLang(current === "ar" ? "en" : "ar");
    // }

    function openSidebar() {
        if (!side || !sideOverlay) return;
        side.classList.add("show");
        sideOverlay.classList.add("show");
        body.classList.add("sidebar-lock");
    }

    function closeSidebar() {
        if (!side || !sideOverlay) return;
        side.classList.remove("show");
        sideOverlay.classList.remove("show");
        body.classList.remove("sidebar-lock");
    }

    function wireFilters() {
        const items = document.querySelectorAll(".js-filter-item");
        items.forEach((item) => {
            item.addEventListener("click", () => {
                items.forEach((x) => x.classList.remove("active"));
                item.classList.add("active");
            });
        });
    }

    function wireFavorites() {
        const buttons = document.querySelectorAll('[data-action="toggle-favorite"]');
        buttons.forEach((btn) => {
            btn.addEventListener("click", () => {
                const current = btn.getAttribute("aria-pressed") === "true";
                btn.setAttribute("aria-pressed", String(!current));
            });
        });
    }

    function wireRatings() {
        const groups = document.querySelectorAll(".rating-group");
        groups.forEach((group) => {
            const stars = group.querySelectorAll(".rating-star");
            stars.forEach((star) => {
                star.addEventListener("click", () => {
                    const value = Number(star.dataset.value || "0");
                    stars.forEach((s) => {
                        const sVal = Number(s.dataset.value || "0");
                        s.classList.toggle("active", sVal <= value);
                    });
                    group.dataset.rating = String(value);
                });
            });
        });
    }

    function wireQuantity() {
        const rows = document.querySelectorAll("[data-qty]");
        rows.forEach((row) => {
            const input = row.querySelector("input");
            const minus = row.querySelector('[data-role="minus"]');
            const plus = row.querySelector('[data-role="plus"]');
            if (!input || !minus || !plus) return;
            minus.addEventListener("click", () => {
                const current = Number(input.value || "1");
                input.value = String(Math.max(1, current - 1));
            });
            plus.addEventListener("click", () => {
                const current = Number(input.value || "1");
                input.value = String(current + 1);
            });
        });
    }

    function wirePaymentModal() {
        const openers = document.querySelectorAll('[data-open="paymentModal"]');
        const closers = document.querySelectorAll('[data-close="paymentModal"]');
        const modal = document.getElementById("paymentModal");
        if (!modal) return;

        openers.forEach((opener) => {
            opener.addEventListener("click", () => modal.classList.add("show"));
        });
        closers.forEach((closer) => {
            closer.addEventListener("click", () => modal.classList.remove("show"));
        });
        modal.addEventListener("click", (e) => {
            if (e.target === modal) modal.classList.remove("show");
        });
    }

    function wireTabs() {
        const groups = document.querySelectorAll("[data-tab-group]");
        groups.forEach((group) => {
            const triggers = group.querySelectorAll("[data-tab-trigger]");
            const panes = group.querySelectorAll("[data-tab-pane]");
            if (!triggers.length || !panes.length) return;

            function setActive(name) {
                triggers.forEach((trigger) => {
                    const isActive = trigger.dataset.tabTrigger === name;
                    trigger.classList.toggle("bg-homy-green-700", isActive);
                    trigger.classList.toggle("text-white", isActive);
                    trigger.classList.toggle("border-homy-green-700", isActive);
                });

                panes.forEach((pane) => {
                    pane.classList.toggle("hidden", pane.dataset.tabPane !== name);
                });
            }

            triggers.forEach((trigger) => {
                trigger.addEventListener("click", () => {
                    setActive(trigger.dataset.tabTrigger || "");
                });
            });

            const defaultTab = group.getAttribute("data-tab-default") || triggers[0].dataset.tabTrigger || "";
            setActive(defaultTab);
        });
    }

    function wireSellerWizard() {
        const wizard = document.querySelector("[data-seller-wizard]");
        if (!wizard) return;

        const steps = wizard.querySelectorAll("[data-step]");
        const indicators = wizard.querySelectorAll("[data-step-indicator]");
        const bar = wizard.querySelector("[data-progress-bar]");
        const label = wizard.querySelector("[data-progress-label]");

        let current = 1;

        function paint() {
            const total = steps.length || 1;
            steps.forEach((step) => {
                const index = Number(step.dataset.step || "1");
                step.classList.toggle("hidden", index !== current);
            });

            indicators.forEach((indicator) => {
                const index = Number(indicator.dataset.stepIndicator || "1");
                indicator.classList.toggle("active", index <= current);
            });

            const percent = Math.round((current / total) * 100);
            if (bar) bar.style.width = `${percent}%`;
            if (label) label.textContent = `${current}/${total}`;
        }

        wizard.querySelectorAll("[data-step-next]").forEach((btn) => {
            btn.addEventListener("click", () => {
                current = Math.min(current + 1, steps.length);
                paint();
            });
        });

        wizard.querySelectorAll("[data-step-prev]").forEach((btn) => {
            btn.addEventListener("click", () => {
                current = Math.max(current - 1, 1);
                paint();
            });
        });

        wizard.querySelectorAll("[data-step-go]").forEach((btn) => {
            btn.addEventListener("click", () => {
                const to = Number(btn.dataset.stepGo || "1");
                current = Math.min(Math.max(to, 1), steps.length);
                paint();
            });
        });

        paint();
    }

    function wireFilePreviews() {
        const inputs = document.querySelectorAll("[data-preview-target]");
        inputs.forEach((input) => {
            input.addEventListener("change", () => {
                const targetId = input.dataset.previewTarget;
                if (!targetId) return;

                const target = document.getElementById(targetId);
                if (!target || !input.files || !input.files.length) return;

                const isSingle = input.dataset.previewMode === "single";
                if (!isSingle) target.innerHTML = "";

                Array.from(input.files).forEach((file) => {
                    const url = URL.createObjectURL(file);
                    const type = file.type || "";

                    if (isSingle && target.tagName === "IMG") {
                        target.src = url;
                        return;
                    }

                    if (type.startsWith("video/")) {
                        const video = document.createElement("video");
                        video.src = url;
                        video.controls = true;
                        video.className = "h-28 w-full rounded-xl object-cover";
                        target.appendChild(video);
                        return;
                    }

                    const img = document.createElement("img");
                    img.src = url;
                    img.alt = file.name;
                    img.className = "h-28 w-full rounded-xl object-cover";
                    target.appendChild(img);
                });
            });
        });
    }

    function wireComparePicker() {
        const picks = document.querySelectorAll("[data-compare-pick]");
        const slots = {
            1: null,
            2: null,
        };
        let activeSlot = 1;

        const openers = document.querySelectorAll("[data-open-compare]");
        const resetButtons = document.querySelectorAll("[data-reset-compare]");

        function drawSlot(slot, data) {
            const empty = document.getElementById(`compare-empty-${slot}`);
            const filled = document.getElementById(`compare-filled-${slot}`);
            const img = document.getElementById(`compare-img-${slot}`);
            const name = document.getElementById(`compare-name-${slot}`);
            const price = document.getElementById(`compare-price-${slot}`);
            const score = document.getElementById(`compare-score-${slot}`);

            if (!empty || !filled || !img || !name || !price || !score) return;

            if (!data) {
                empty.classList.remove("hidden");
                filled.classList.add("hidden");
                return;
            }

            empty.classList.add("hidden");
            filled.classList.remove("hidden");
            img.src = data.img;
            name.textContent = data.name;
            price.textContent = data.price;
            score.textContent = data.rating;
        }

        function redrawTable() {
            const table = document.getElementById("compare-table");
            const a = slots[1];
            const b = slots[2];
            if (!table) return;
            if (!a || !b) {
                table.classList.add("hidden");
                return;
            }
            table.classList.remove("hidden");

            const map = [
                ["table-title-1", a.name],
                ["table-title-2", b.name],
                ["table-price-1", a.price],
                ["table-price-2", b.price],
                ["table-rate-1", a.rating],
                ["table-rate-2", b.rating],
                ["table-pack-1", a.pack],
                ["table-pack-2", b.pack],
                ["table-text-1", a.desc],
                ["table-text-2", b.desc],
            ];

            map.forEach(([id, value]) => {
                const el = document.getElementById(id);
                if (el) el.textContent = value;
            });
        }

        openers.forEach((opener) => {
            opener.addEventListener("click", () => {
                activeSlot = Number(opener.dataset.slot || "1");
                if (compareModal) compareModal.classList.add("show");
            });
        });

        picks.forEach((pick) => {
            pick.addEventListener("click", () => {
                const data = {
                    name: pick.dataset.name || "",
                    price: pick.dataset.price || "",
                    rating: pick.dataset.rating || "",
                    pack: pick.dataset.pack || "",
                    desc: pick.dataset.desc || "",
                    img: pick.dataset.img || "",
                };
                slots[activeSlot] = data;
                drawSlot(activeSlot, data);
                redrawTable();
                if (compareModal) compareModal.classList.remove("show");
            });
        });

        resetButtons.forEach((btn) => {
            btn.addEventListener("click", () => {
                const slot = Number(btn.dataset.slot || "1");
                slots[slot] = null;
                drawSlot(slot, null);
                redrawTable();
            });
        });

        if (compareModal) {
            compareModal.addEventListener("click", (e) => {
                if (e.target === compareModal) compareModal.classList.remove("show");
            });
        }
    }

    // function initFromStorage() {
    //     const theme = localStorage.getItem("homy-theme");
    //     if (theme) {
    //         setTheme(theme);
    //     }

    //     const lang = localStorage.getItem("homy-lang");
    //     if (lang) {
    //         setLang(lang);
    //     }
    // }

    function bindBase() {
        // if (themeToggle) themeToggle.addEventListener("click", toggleTheme);
        // if (langToggle) langToggle.addEventListener("click", toggleLang);

        if (openSideBtn) openSideBtn.addEventListener("click", openSidebar);
        if (closeSideBtn) closeSideBtn.addEventListener("click", closeSidebar);
        if (sideOverlay) sideOverlay.addEventListener("click", closeSidebar);

        document.querySelectorAll('[data-close="comparePickModal"]').forEach((btn) => {
            btn.addEventListener("click", () => {
                if (compareModal) compareModal.classList.remove("show");
            });
        });
    }

    // initFromStorage();
    bindBase();
    wireFilters();
    wireFavorites();
    wireRatings();
    wireQuantity();
    wirePaymentModal();
    wireComparePicker();
    wireTabs();
    wireSellerWizard();
    wireFilePreviews();
})();





    // (function(){
    //   const container = document.getElementById('homy-toasts');

    //   // placement based on dir/lang
    //   function setPlacement(){
    //     const dir = document.documentElement.getAttribute('dir') || document.dir || 'rtl';
    //     if(dir === 'rtl'){
    //       container.style.left = '1.5rem'; container.style.right = 'auto';
    //     } else {
    //       container.style.right = '1.5rem'; container.style.left = 'auto';
    //     }
    //   }
    //   setPlacement();

    //   // observe dir changes if parent app toggles
    //   const mo = new MutationObserver((mut)=>{ if(mut.some(m=>m.attributeName==='dir')) setPlacement(); });
    //   mo.observe(document.documentElement,{attributes:true});

    //   function escapeHtml(unsafe){ return String(unsafe).replace(/[&<>"']/g,function(m){ return {'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#039;'}[m]; }); }

    //   const TYPES = {
    //     success: {
    //       icon: 'fa-solid fa-check',
    //       lightBg: 'bg-emerald-50', lightBorder: 'border-emerald-200', lightText: 'text-emerald-700', progress: 'bg-emerald-500',
    //       darkBg: 'dark:bg-[#08321a]/70', darkBorder: 'dark:border-homy-gold-600/35', darkText: 'dark:text-homy-gold-400'
    //     },
    //     info: {
    //       icon: 'fa-solid fa-circle-info',
    //       lightBg: 'bg-sky-50', lightBorder: 'border-sky-200', lightText: 'text-sky-700', progress: 'bg-sky-500',
    //       darkBg: 'dark:bg-[#0b2b3b]/70', darkBorder: 'dark:border-homy-gold-600/35', darkText: 'dark:text-homy-gold-400'
    //     },
    //     error: {
    //       icon: 'fa-solid fa-circle-exclamation',
    //       lightBg: 'bg-red-50', lightBorder: 'border-red-200', lightText: 'text-red-700', progress: 'bg-red-500',
    //       darkBg: 'dark:bg-[#3a0f0f]/70', darkBorder: 'dark:border-homy-gold-600/35', darkText: 'dark:text-homy-gold-400'
    //     }
    //   };

    //   // Public API: showNotification({type:'success', messages:{ar:'..',en:'..'}, duration:5000, lang:'ar'})
    //   window.showNotification = function({type='info', messages='', duration=5000, lang}){
    //     const docLang = document.documentElement.lang || 'ar';
    //     const useLang = lang || docLang || 'ar';
    //     let text = '';
    //     if(typeof messages === 'string') text = messages; else if(messages && typeof messages === 'object') text = messages[useLang] || messages.ar || messages.en || '';
    //     text = escapeHtml(text || '');

    //     const t = TYPES[type] || TYPES.info;
    //     const id = 'notif-' + Date.now() + '-' + Math.floor(Math.random()*9999);
    //     const el = document.createElement('div');
    //     el.id = id;
    //     el.setAttribute('role','status');
    //     el.className = `w-96 rounded-xl border p-3 shadow-lg flex items-start gap-3 animate-fade-in ${t.lightBg} ${t.lightBorder} ${t.lightText} ${t.darkBg} ${t.darkBorder} ${t.darkText}`;

    //     el.innerHTML = `
    //       <div class="pt-1"><i class="${t.icon} ${t.lightText} text-lg ${t.darkText}"></i></div>
    //       <div class="flex-1">
    //         <p class="text-sm font-black ${t.lightText} ${t.darkText}">${text}</p>
    //         <div class="mt-2 h-1 w-full rounded-full bg-black/5 overflow-hidden">
    //           <div class="progress ${t.progress} h-1 w-full" style="transform-origin:left;transform:scaleX(1)"></div>
    //         </div>
    //       </div>
    //       <button class="ms-2 text-slate-400 hover:text-slate-600" aria-label="dismiss"><i class="fa-solid fa-xmark"></i></button>
    //     `;

    //     // attach dismiss handler
    //     el.querySelector('button').addEventListener('click',()=>dismissNotification(id));

    //     container.appendChild(el);

    //     // start progress animation
    //     const prog = el.querySelector('.progress');
    //     requestAnimationFrame(()=>{ prog.style.transition = `transform ${duration}ms linear`; prog.style.transform = 'scaleX(0)'; });

    //     // auto dismiss
    //     const timer = setTimeout(()=>{ dismissNotification(id); }, duration);

    //     // return an object to allow manual dismissal if needed
    //     return {id, dismiss: ()=>{ clearTimeout(timer); dismissNotification(id); }};
    //   };

    //   window.dismissNotification = function(id){ const el = document.getElementById(id); if(!el) return; el.classList.add('opacity-0','scale-95'); setTimeout(()=>{ if(el?.parentNode) el.parentNode.removeChild(el); },300); };

    //   // small helper demo bindings (you can remove when copying component)
    //   document.getElementById('demo-success-ar').addEventListener('click',()=>{
    //     showNotification({type:'success', messages:{ar:'تم تسجيل البائع بنجاح', en: 'Vendor registered successfully'}, duration:4500});
    //   });
    //   document.getElementById('demo-success-en').addEventListener('click',()=>{
    //     // temporarily set doc lang to en for demo
    //     document.documentElement.lang = document.documentElement.lang === 'en' ? 'en' : 'en';
    //     showNotification({type:'success', messages:{ar:'تم تسجيل البائع بنجاح', en: 'Vendor registered successfully'}, duration:4500});
    //   });

    //   document.getElementById('toggle-lang').addEventListener('click',()=>{
    //     const cur = document.documentElement.lang === 'en' ? 'ar' : 'en';
    //     document.documentElement.lang = cur;
    //     document.documentElement.setAttribute('dir', cur === 'ar' ? 'rtl' : 'ltr');
    //     setPlacement();
    //     alert('Language: ' + cur);
    //   });

    //   document.getElementById('toggle-theme').addEventListener('click',()=>{
    //     document.documentElement.classList.toggle('dark');
    //   });

    //   // small fade-in keyframes
    //   const style = document.createElement('style');
    //   style.innerHTML = `@keyframes fade-in{from{opacity:0;transform:translateY(-6px)}to{opacity:1;transform:translateY(0)}} .animate-fade-in{animation:fade-in .18s ease-out}`;
    //   document.head.appendChild(style);

    // })();
