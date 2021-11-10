package com.example.springapp.models.sasha;

import lombok.Data;

import javax.persistence.*;

@Entity
@Data
public class Channel {

	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	private Long id;

	private String title;

	private Double frequency;

	@ManyToOne
	private Program program;

}
