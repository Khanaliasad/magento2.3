<?php
namespace Naheed\Grocery\Api;

use Naheed\Grocery\Api\Data\BookGroceryInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * Interface BookGroceryRepositoryInterface
 *
 * @api
 */
interface BookGroceryRepositoryInterface
{
    /**
     * Create or update a BookGrocery.
     *
     * @param BookGroceryInterface $page
     * @return BookGroceryInterface
     */
    public function save(BookGroceryInterface $page);

    /**
     * Get a BookGrocery by Id
     *
     * @param int $id
     * @return BookGroceryInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException If BookGrocery with the specified ID does not exist.
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($id);

    /**
     * Retrieve BookGrocerys which match a specified criteria.
     *
     * @param SearchCriteriaInterface $criteria
     */
    public function getList(SearchCriteriaInterface $criteria);

    /**
     * Delete a BookGrocery
     *
     * @param BookGroceryInterface $page
     * @return BookGroceryInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException If BookGrocery with the specified ID does not exist.
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(BookGroceryInterface $page);

    /**
     * Delete a BookGrocery by Id
     *
     * @param int $id
     * @return BookGroceryInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException If customer with the specified ID does not exist.
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($id);
}
