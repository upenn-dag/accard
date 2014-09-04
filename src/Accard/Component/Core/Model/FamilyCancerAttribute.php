<?php

/**
 * This file is part of the Accard package.
 *
 * (c) University of Pennsylvania
 *
 * For the full copyright and license information, please view the
 * LICENSE file that was distributed with this source code.
 */
namespace Accard\Component\Core\Model;

use Accard\Component\Diagnosis\Model\CodeGroupInterface;

/**
 * Accard family cancer attribute model.
 *
 * @author Dylan Pierce <piercedy@upenn.edu>
 * @author Frank Bardon Jr. <bardonf@upenn.edu>
 */
class FamilyCancerAttribute extends Attribute implements FamilyCancerAttributeInterface
{
    /**
     * family member.
     *
     * @var string
     */
    protected $familyMember;

    /**
     * diagnosis code group
     *
     * @var CodeGroupInterface
     */
    protected $codeGroups;

    /**
     * side of family.
     *
     * @var string
     */
    protected $side;

    /**
     * {@inheritdoc}
     */
    public function setFamilyMember($familyMember)
    {
        $this->familyMember = $familyMember;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getFamilyMember()
    {
        return $this->familyMember;
    }

    /**
     * {@inheritdoc}
     */
    public function getCodeGroups()
    {
        return $this->codeGroups;
    }

    /**
     * {@inheritdoc}
     */
    public function setCodeGroups(CodeGroupInterface $codeGroups = null)
    {
        $this->codeGroups = $codeGroups;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setSide($side)
    {
        $this->side = $side;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSide()
    {
        return $this->side;
    }
}
