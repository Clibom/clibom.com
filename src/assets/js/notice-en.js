CookieConsent.run({
    categories: {
        necessary: {
            enabled: true,
            readOnly: true
        },
        analytics: {
            autoClear: {
                cookies: [
                    { name: /^_ga/ },
                    { name: '_gid' }
                ]
            }
        }
    },
    language: {
        default: 'en',
        translations: {
            en: {
                consentModal: {
                    title: 'Cookies',
                    description: 'We use Google Analytics to measure site traffic. Cookies are only placed with your consent.',
                    acceptAllBtn: 'Accept all',
                    acceptNecessaryBtn: 'Reject',
                    showPreferencesBtn: 'Manage preferences'
                },
                preferencesModal: {
                    title: 'Cookie preferences',
                    acceptAllBtn: 'Accept all',
                    acceptNecessaryBtn: 'Reject all',
                    savePreferencesBtn: 'Save preferences',
                    sections: [
                        {
                            title: 'Necessary cookies',
                            description: 'These cookies are required for the site to function and cannot be disabled.',
                            linkedCategory: 'necessary'
                        },
                        {
                            title: 'Analytics cookies',
                            description: 'Google Analytics helps us understand how visitors use the site so we can improve it. No personal data is shared for advertising purposes.',
                            linkedCategory: 'analytics'
                        }
                    ]
                }
            }
        }
    },
    onConsent: function () {
        if (CookieConsent.acceptedCategory('analytics')) {
            gtag('consent', 'update', {'analytics_storage': 'granted'});
        }
    },
    onChange: function ({ changedCategories }) {
        if (changedCategories.includes('analytics')) {
            gtag('consent', 'update', {
                'analytics_storage': CookieConsent.acceptedCategory('analytics') ? 'granted' : 'denied'
            });
        }
    }
});