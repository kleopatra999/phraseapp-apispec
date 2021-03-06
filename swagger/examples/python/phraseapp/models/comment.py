# coding: utf-8

"""
    PhraseApp

    PhraseApp API for the interaction with the PhraseApp localization platform

    OpenAPI spec version: 2.0
    Contact: support@phraseapp.com
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


from pprint import pformat
from six import iteritems
import re


class Comment(object):
    """
    NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually.
    """


    """
    Attributes:
      swagger_types (dict): The key is attribute name
                            and the value is attribute type.
      attribute_map (dict): The key is attribute name
                            and the value is json key in definition.
    """
    swagger_types = {
        'id': 'str',
        'message': 'str',
        'user': 'UserPreview',
        'created_at': 'datetime',
        'updated_at': 'datetime'
    }

    attribute_map = {
        'id': 'id',
        'message': 'message',
        'user': 'user',
        'created_at': 'created_at',
        'updated_at': 'updated_at'
    }

    def __init__(self, id=None, message=None, user=None, created_at=None, updated_at=None):
        """
        Comment - a model defined in Swagger
        """

        self._id = None
        self._message = None
        self._user = None
        self._created_at = None
        self._updated_at = None
        self.discriminator = None

        if id is not None:
          self.id = id
        if message is not None:
          self.message = message
        if user is not None:
          self.user = user
        if created_at is not None:
          self.created_at = created_at
        if updated_at is not None:
          self.updated_at = updated_at

    @property
    def id(self):
        """
        Gets the id of this Comment.

        :return: The id of this Comment.
        :rtype: str
        """
        return self._id

    @id.setter
    def id(self, id):
        """
        Sets the id of this Comment.

        :param id: The id of this Comment.
        :type: str
        """

        self._id = id

    @property
    def message(self):
        """
        Gets the message of this Comment.

        :return: The message of this Comment.
        :rtype: str
        """
        return self._message

    @message.setter
    def message(self, message):
        """
        Sets the message of this Comment.

        :param message: The message of this Comment.
        :type: str
        """

        self._message = message

    @property
    def user(self):
        """
        Gets the user of this Comment.

        :return: The user of this Comment.
        :rtype: UserPreview
        """
        return self._user

    @user.setter
    def user(self, user):
        """
        Sets the user of this Comment.

        :param user: The user of this Comment.
        :type: UserPreview
        """

        self._user = user

    @property
    def created_at(self):
        """
        Gets the created_at of this Comment.

        :return: The created_at of this Comment.
        :rtype: datetime
        """
        return self._created_at

    @created_at.setter
    def created_at(self, created_at):
        """
        Sets the created_at of this Comment.

        :param created_at: The created_at of this Comment.
        :type: datetime
        """

        self._created_at = created_at

    @property
    def updated_at(self):
        """
        Gets the updated_at of this Comment.

        :return: The updated_at of this Comment.
        :rtype: datetime
        """
        return self._updated_at

    @updated_at.setter
    def updated_at(self, updated_at):
        """
        Sets the updated_at of this Comment.

        :param updated_at: The updated_at of this Comment.
        :type: datetime
        """

        self._updated_at = updated_at

    def to_dict(self):
        """
        Returns the model properties as a dict
        """
        result = {}

        for attr, _ in iteritems(self.swagger_types):
            value = getattr(self, attr)
            if isinstance(value, list):
                result[attr] = list(map(
                    lambda x: x.to_dict() if hasattr(x, "to_dict") else x,
                    value
                ))
            elif hasattr(value, "to_dict"):
                result[attr] = value.to_dict()
            elif isinstance(value, dict):
                result[attr] = dict(map(
                    lambda item: (item[0], item[1].to_dict())
                    if hasattr(item[1], "to_dict") else item,
                    value.items()
                ))
            else:
                result[attr] = value

        return result

    def to_str(self):
        """
        Returns the string representation of the model
        """
        return pformat(self.to_dict())

    def __repr__(self):
        """
        For `print` and `pprint`
        """
        return self.to_str()

    def __eq__(self, other):
        """
        Returns true if both objects are equal
        """
        if not isinstance(other, Comment):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other
