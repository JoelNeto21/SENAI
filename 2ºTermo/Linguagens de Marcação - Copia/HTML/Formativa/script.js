document.addEventListener('DOMContentLoaded', () => {
    const products = [
        {
            id: 1,
            name: 'Vestido "Essência Moderna"',
            category: 'Moda Feminina',
            price: 250.00,
            description: 'Elegância minimalista com caimento perfeito, ideal para eventos sofisticados.',
            image: 'https://placehold.co/400x500/e0e0e0/ffffff?text=Vestido+1'
        },
        {
            id: 2,
            name: 'Perfume "Aura Dourada"',
            category: 'Perfumaria',
            price: 180.00,
            description: 'Fragrância unissex com notas de bergamota e sândalo. Puro luxo.',
            image: 'https://placehold.co/400x500/e0e0e0/ffffff?text=Perfume+1'
        },
        {
            id: 3,
            name: 'Bolsa de Couro "Oásis Urbano"',
            category: 'Bolsas e Acessórios',
            price: 450.00,
            description: 'Design exclusivo com detalhes em metal dourado. Praticidade e estilo.',
            image: 'https://placehold.co/400x500/e0e0e0/ffffff?text=Bolsa+1'
        },
        {
            id: 4,
            name: 'Jaqueta "Rebelde Chic"',
            category: 'Moda Masculina',
            price: 320.00,
            description: 'Jaqueta em couro sintético com modelagem slim. Atitude e conforto.',
            image: 'https://placehold.co/400x500/e0e0e0/ffffff?text=Jaqueta+1'
        },
        {
            id: 5,
            name: 'Kit de Pincéis "Arte em Si"',
            category: 'Maquiagem',
            price: 120.00,
            description: 'Set completo de pincéis de alta qualidade para maquiagens profissionais.',
            image: 'https://placehold.co/400x500/e0e0e0/ffffff?text=Pinceis+1'
        },
        {
            id: 6,
            name: 'Violão Acústico "Harmonia"',
            category: 'Instrumentos',
            price: 850.00,
            description: 'Violão com sonoridade rica e acabamento premium. Perfeito para iniciantes e profissionais.',
            image: 'https://placehold.co/400x500/e0e0e0/ffffff?text=Violao+1'
        },
        {
            id: 7,
            name: 'Camisa "Linhas do Tempo"',
            category: 'Moda Masculina',
            price: 150.00,
            description: 'Camisa de linho com detalhes bordados, um clássico atemporal.',
            image: 'https://placehold.co/400x500/e0e0e0/ffffff?text=Camisa+1'
        },
        {
            id: 8,
            name: 'Óculos de Sol "Visão Clara"',
            category: 'Acessórios',
            price: 90.00,
            description: 'Óculos de sol com design arrojado e proteção UV. Estilo e segurança.',
            image: 'https://placehold.co/400x500/e0e0e0/ffffff?text=Oculos+1'
        },
    ];

    const carousel = document.getElementById('product-carousel');
    const galleryTrigger = document.getElementById('gallery-trigger');
    const cartButton = document.getElementById('cart-button');
    const cartModal = document.getElementById('cart-modal');
    const closeCartButton = document.getElementById('close-cart-button');
    const cartItemsContainer = document.getElementById('cart-items');
    const cartTotalElement = document.getElementById('cart-total');
    const cartCounter = document.getElementById('cart-counter');
    const emptyCartMessage = document.getElementById('empty-cart-message');
    const viewMoreBtnContainer = document.getElementById('view-more-container');
    const viewMoreBtn = document.getElementById('view-more-btn');
    const body = document.body;

    let cart = [];
    let isScrollingHorizontally = false;
    let currentScrollPosition = 0;
    let animationFrameId = null;

    // Renderiza os produtos no carrossel
    function renderProducts() {
        carousel.innerHTML = '';
        products.forEach(product => {
            const productCard = document.createElement('div');
            productCard.className = 'product-card-item';
            productCard.innerHTML = `
        <div class="product-card">
            <img src="${product.image}" alt="${product.name}" onerror="this.onerror=null; this.src='https://placehold.co/400x500/e0e0e0/ffffff?text=Produto';" />
            <h3>${product.name}</h3>
            <p class="category">${product.category}</p>
            <p class="price">R$ ${product.price.toFixed(2).replace('.', ',')}</p>
            <p class="description">${product.description}</p>
            <button class="add-to-cart-btn" data-id="${product.id}">Adicionar</button>
        </div>
    `;
            carousel.appendChild(productCard);
        });
        // Adiciona o spacer após o último card
        const spacer = document.createElement('div');
        spacer.className = 'carousel-spacer';
        carousel.appendChild(spacer);
    }

    // Lógica do Carrinho de Compras
    function updateCartDisplay() {
        cartItemsContainer.innerHTML = '';
        let total = 0;

        if (cart.length === 0) {
            emptyCartMessage.style.display = 'block';
        } else {
            emptyCartMessage.style.display = 'none';
            cart.forEach(item => {
                const itemElement = document.createElement('div');
                itemElement.className = 'cart-item';
                itemElement.innerHTML = `
            <img src="${item.image}" alt="${item.name}" />
            <div class="item-details">
                <h4>${item.name}</h4>
                <p>R$ ${item.price.toFixed(2).replace('.', ',')}</p>
            </div>
            <button class="remove-item-btn" data-id="${item.id}">Remover</button>
        `;
                cartItemsContainer.appendChild(itemElement);
                total += item.price;
            });
        }

        cartTotalElement.textContent = `R$ ${total.toFixed(2).replace('.', ',')}`;
        cartCounter.textContent = cart.length;
        if (cart.length > 0) {
            cartCounter.classList.add('has-items');
        } else {
            cartCounter.classList.remove('has-items');
        }
    }

    function addToCart(productId) {
        const product = products.find(p => p.id === parseInt(productId));
        if (product) {
            cart.push(product);
            updateCartDisplay();
        }
    }

    function removeItemFromCart(productId) {
        const index = cart.findIndex(item => item.id === parseInt(productId));
        if (index !== -1) {
            cart.splice(index, 1);
            updateCartDisplay();
        }
    }

    // Lógica do Scroll Horizontal Interativo
    function animateScroll() {
        if (isScrollingHorizontally) {
            carousel.style.transform = `translateX(${-currentScrollPosition}px)`;
            const galleryWidth = carousel.scrollWidth - galleryTrigger.clientWidth;
            
            if (viewMoreBtnContainer && currentScrollPosition >= galleryWidth - 500) {
                viewMoreBtnContainer.classList.add('visible');
            } else if (viewMoreBtnContainer) {
                viewMoreBtnContainer.classList.remove('visible');
            }
            animationFrameId = requestAnimationFrame(animateScroll);
        }
    }

    function handleWheel(e) {
        const rect = galleryTrigger.getBoundingClientRect();
        const isOverGallery = e.clientX >= rect.left && e.clientX <= rect.right && e.clientY >= rect.top && e.clientY <= rect.bottom;

        if (isOverGallery) {
            e.preventDefault();
            if (!isScrollingHorizontally) {
                isScrollingHorizontally = true;
                body.classList.add('no-scroll');
                animateScroll();
            }

            const scrollDelta = e.deltaY;
            currentScrollPosition += scrollDelta * 1.5;

            const galleryWidth = carousel.scrollWidth - galleryTrigger.clientWidth;

            if (currentScrollPosition < 0) {
                currentScrollPosition = 0;
                body.classList.remove('no-scroll');
                isScrollingHorizontally = false;
                if (animationFrameId) cancelAnimationFrame(animationFrameId);
            } else if (currentScrollPosition > galleryWidth) {
                currentScrollPosition = galleryWidth;
                body.classList.remove('no-scroll');
                isScrollingHorizontally = false;
                if (animationFrameId) cancelAnimationFrame(animationFrameId);
            }
        } else if (isScrollingHorizontally) {
            body.classList.remove('no-scroll');
            isScrollingHorizontally = false;
            if (animationFrameId) cancelAnimationFrame(animationFrameId);
        }
    }

    // Event Listeners
    carousel.addEventListener('click', (e) => {
        if (e.target.classList.contains('add-to-cart-btn')) {
            const productId = e.target.dataset.id;
            addToCart(productId);
        }
    });

    cartButton.addEventListener('click', () => {
        cartModal.classList.add('show');
    });

    closeCartButton.addEventListener('click', () => {
        cartModal.classList.remove('show');
    });

    cartModal.addEventListener('click', (e) => {
        if (e.target === cartModal) {
            cartModal.classList.remove('show');
        }
        if (e.target.classList.contains('remove-item-btn')) {
            const productId = e.target.dataset.id;
            removeItemFromCart(productId);
        }
    });

    viewMoreBtn.addEventListener('click', () => {
        isScrollingHorizontally = false;
        body.classList.remove('no-scroll');
        if (animationFrameId) cancelAnimationFrame(animationFrameId);
    });

    // Adiciona a lógica de scroll avançada
    window.addEventListener('wheel', handleWheel, {
        passive: false
    });

    // Inicia a renderização
    renderProducts();
    updateCartDisplay();
});
