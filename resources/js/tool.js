Nova.booting((Vue, router, store) => {
    router.addRoutes([
        {
            name: 'route-viewer',
            path: '/route-viewer',
            component: require('./components/Tool'),
        },
    ])
})
