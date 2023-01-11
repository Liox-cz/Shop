<?php
declare(strict_types=1);

namespace Liox\Shop\Controller;

use Liox\Shop\Entity\Product;
use Liox\Shop\Repository\ProductVariantRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class HomepageController extends AbstractController
{
    public function __construct(
        private readonly ProductVariantRepository $productVariantRepository,
    ) {}

    #[Route(path: '/', name: 'homepage', methods: ['GET'])]
    public function __invoke(): Response
    {
        return $this->render('homepage.html.twig', [
            'products' => $this->productVariantRepository->findAll(),
        ]);
    }
}
