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
        default: 'fr',
        translations: {
            fr: {
                consentModal: {
                    title: 'Cookies',
                    description: 'Nous utilisons Google Analytics pour mesurer l\'audience du site. Ces cookies ne sont déposés qu\'avec votre accord.',
                    acceptAllBtn: 'Tout accepter',
                    acceptNecessaryBtn: 'Refuser',
                    showPreferencesBtn: 'Personnaliser'
                },
                preferencesModal: {
                    title: 'Préférences de cookies',
                    acceptAllBtn: 'Tout accepter',
                    acceptNecessaryBtn: 'Tout refuser',
                    savePreferencesBtn: 'Enregistrer',
                    sections: [
                        {
                            title: 'Cookies nécessaires',
                            description: 'Ces cookies sont indispensables au fonctionnement du site et ne peuvent pas être désactivés.',
                            linkedCategory: 'necessary'
                        },
                        {
                            title: 'Cookies analytiques',
                            description: 'Google Analytics nous aide à comprendre comment les visiteurs utilisent le site afin de l\'améliorer. Aucune donnée personnelle n\'est utilisée à des fins publicitaires.',
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